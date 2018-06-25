<?php
date_default_timezone_set("Europe/Paris");
if (file_exists("../private/chat"))
{
	$chat = unserialize(file_get_contents("../private/chat"));
	foreach ($chat as $value)
	{
		echo "[";
		echo date("H:i", $value["time"]);
		echo "] ";
		echo "<b>";
		echo $value["login"];
		echo "</b>: ";
		echo $value["msg"];
		echo "<br />";
    echo "\n";
	}
}
?>
