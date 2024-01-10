<?php
echo "<table border=3 cellpadding=2 cellspacing=2 align=center>";
$mul=1;

for($i=1;$i<=10;$i++)
{
	echo "<tr>";
	echo "<td>";
	$mul=1*$i;
	echo  "1 *".$i."=".$mul."<br>";
	echo "</td>";
	echo "</tr>";
}

echo "</table>";

?>