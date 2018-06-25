#!/usr/bin/php
<?php
if ($argc == 2)
{
  $op = array("+", "-", "*", "/", "%");
  $test = sscanf($argv[1], "%d %c %d %s");
  if ($test[0] && $test[1] && $test[2] && !$test[3])
  {
    if ($test[1] == '+')
    {
      $result = $test[0] + $test[2];
    }
    else if ($test[1] == '-')
    {
      $result = $test[0] - $test[2];
  	}
    else if ($test[1] == '*')
  	{
    	$result = $test[0] * $test[2];
  	}
    else if ($test[1] == '/')
  	{
      $result = $test[0] / $test[2];
    }
    else if ($test[1] == '%')
  	{
      $result = $test[0] % $test[2];
    }
  	echo "$result\n";
  }
  else
  {
  	echo "Syntax Error\n";
  }
}
else
{
  echo "Incorrect Parameters\n";
}
?>
