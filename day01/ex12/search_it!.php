#!/usr/bin/php
<?php
if ($argc > 2)
{
  $result = NULL;
  foreach ($argv as $elem)
  {
    if ($elem != $argv[0] || $elem != $argv[1])
    {
      $val = explode(":", $elem);
      if ($val[0] == $argv[1])
      {
        $result = $val[1];
      }
    }
  }
  if (is_null($result) == FALSE)
  {
    echo "$result\n";
  }
}
?>
