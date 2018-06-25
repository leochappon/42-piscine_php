#!/usr/bin/php
<?php
if ($argv[1] != NULL)
{
    $str = array_filter(explode(' ', $argv[1]));
    foreach (array_slice($str, 1) as $word)
    {
        echo "$word ";
    }
    echo "$str[0]\n";
}
?>
