#!/usr/bin/php
<?php
function ft_split($s)
{
  $tab = array_filter(explode(" ", $s));
  sort($tab);
  return $tab;
}

$newtab = array();
foreach ($argv as $arg)
{
	if ($arg != $argv[0])
	{
		$tab = ft_split($arg);
		$newtab = array_merge($newtab, $tab);
	}
}
sort($newtab);
foreach ($newtab as $element)
{
	echo "$element\n";
}
?>
