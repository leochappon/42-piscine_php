#!/usr/bin/php
<?php
if ($argv[1] != NULL)
{
  $regex = preg_replace("/[ \t]{2,}/", " ", trim($argv[1]));
  echo "$regex\n";
}
?>
