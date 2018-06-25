#!/usr/bin/php
<?php
if ($argc == 4)
{
  $nb1 = trim($argv[1]);
  $op = trim($argv[2]);
  $nb2 = trim($argv[3]);

  if ($op == "+")
  {
    $result = $nb1 + $nb2;
  }
  else if ($op == "-")
  {
    $result = $nb1 - $nb2;
  }
  else if ($op == "*")
  {
    $result = $nb1 * $nb2;
  }
  else if ($op == "/")
  {
    $result = $nb1 / $nb2;
  }
  else if ($op == "%")
  {
    $result = $nb1 % $nb2;
  }
  echo "$result\n";
}
else
{
  echo "Incorrect Parameters\n";
}
?>
