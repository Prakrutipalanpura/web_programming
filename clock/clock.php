<html>
<style>
.tab
{
	background-color:black;
	color:white;
}
#dt1
{
	color:red;
	font-family:dotum;
}
</style>
</html>

<?php

$d=date("d/m/Y");

echo "<table border=1 class=tab><tr>
<td><b>Date</b></td>
<td><b>Month</b></td>
<td><b>Year</b></td>
</tr>
<tr align=center>
<td id=dt1 colspan=3>$d</td>

</table>";
date_default_timezone_set("Asia/calcutta");
$H=date("H:i:s");
echo "<table border=1 class=tab><tr>

<td><b>hours</b></td>
<td><b>minutes</b></td>
<td><b>seconds</b></td>
</tr>
<tr align=center>
<td id=dt1 colspan=3>$H</td>
</tr>
</table>";
header('Refresh: 1');

?>