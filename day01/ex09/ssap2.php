#!/usr/bin/php
<?php
function is_alpha($str)
{
  $str = str_split($str);
  foreach ($str as $char)
  {
    if (ctype_lower($char) == FALSE)
      return (FALSE);
  }
  return (TRUE);
}

function cmp_char($a, $b)
{
  $a = strtolower($a);
  $b = strtolower($b);
  if (is_alpha($a))
    $val_a = 1;
  else if (is_numeric($a))
    $val_a = 2;
  else
    $val_a = 3;
  if (is_alpha($b))
    $val_b = 1;
  else if (is_numeric($b))
    $val_b = 2;
  else
    $val_b = 3;
  if ($val_a != $val_b)
    return ($val_a - $val_b);
  return (strcmp($a, $b));
}

function cmp_str($a, $b)
{
  $i = 0;
  while ($i < strlen($a) && $i < strlen($b))
  {
    if (cmp_char($a[$i], $b[$i]) > 0)
      return (1);
    else if (cmp_char($a[$i], $b[$i]) < 0)
      return (-1);
    $i++;
  }
  if ($i < strlen($a))
    return (1);
  else if ($i < strlen($b))
    return (-1);
  return (0);
}

function ft_split($str)
{
  $tab = array_filter(explode(" ", $str));
  sort($tab);
  return ($tab);
}

$tab = $argv;
unset($tab[0]);
$newtab = array();
foreach ($tab as $element)
{
  $newtab = array_merge($newtab, ft_split($element));
}
usort($newtab, "cmp_str");
foreach ($newtab as $element)
{
  echo "$element\n";
}
?>
