#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');

function month_to_int($month)
{
    $array = array (
    "JANVIER" => 1,
    "FEVRIER" => 2,
    "MARS" => 3,
    "AVRIL" => 4,
    "MAI" => 5,
    "JUIN" => 6,
    "JUILLET" => 7,
    "AOUT" => 8,
    "SEPTEMBRE" => 9,
    "OCTOBRE" => 10,
    "NOVEMBRE" => 11,
    "DECEMBRE" => 12);
    return $array[$month];
}

if (preg_match("/(^[Ll]undi|^[Mm]ardi|^[Mm]ercredi|^[Jj]eudi|^[Vv]endredi|^[Ss]amedi|^[Dd]imanche) ([0-9]|[1]?[0-9]|[2]?[0-9]|[3][0-1]) ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([1][9][7-9][0-9]|[2-9][0-9][0-9][0-9]) ([0-2][0-9]):([0-5][0-9]):([0-5][0-9])$/", $argv[1], $matches))
{
    echo mktime($matches[5], $matches[6], $matches[7], month_to_int(strtoupper($matches[3])), $matches[2], $matches[4]) . "\n";
}
else
{
    echo "Wrong Format\n";
}
?>
