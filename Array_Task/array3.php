<?php

$students_master=array(array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya",
"Mobile_no"=>2563147895,"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19),
array("id"=>1,"Roll_no"=>50,"Name"=>"Prakruti","City"=>"Rajkot","Department"=>"BCA","University"=>"Atmiya","Mobile_no"=>2563147895,
"Div"=>"B1","Gender"=>"Female","Age"=>19));

//print_r($students_master);

echo "<table border=1><tr><td><b>id</b></td>
                      <td><b>Roll_no</b></td>
                      <td><b>Name</b></td>
                      <td><b>City</b></td>
                      <td><b>Department</b></td>
                      <td><b>University</b></td>
                      <td><b>Mobile_no</b></td>
                      <td><b>Div</b></td>
                      <td><b>Gender</b></td>
					  <td><b>Age</b></td></tr>";
foreach($students_master as $row)
{
	echo "<tr>";
	foreach($row as $detail)
	{
		echo "<td>"."$detail"."</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>