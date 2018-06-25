#!/usr/bin/php
<?php
function replace($matches)
{
	$new = $matches[1].strtoupper($matches[2]).$matches[3];
	return ($new);
}

if ($argc > 1)
{
  $file = file_get_contents($argv[1]);
  $title = "/(<.*title=\")(.*)(\">)/";
  $link = "/(<a.*>)(.*)(<\/a)/";
  $linkimg = "/(<a.*>)(.*)(<img)/";
  $file = preg_replace_callback($title, "replace", $file);
  $file = preg_replace_callback($link, "replace", $file);
  $file = preg_replace_callback($linkimg, "replace", $file);
  echo "$file";
}
?>
