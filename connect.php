<?php
$servername="localhost";
$username="root";
$password="";
$database="exam_management";

$connection = mysqli_connect($servername,$username,$password,$database);

if(!$connection)
{
	echo "<h1>Not Conected :(<h1>";
}
else
{
	echo "<h1>Connected :)<h1>";
}
?>