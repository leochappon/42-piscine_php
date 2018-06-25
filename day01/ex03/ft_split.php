#!/usr/bin/php
<?php
function ft_split($s)
{
  $tab = array_filter(explode(" ", $s));
  sort($tab);
  return $tab;
}
?>
