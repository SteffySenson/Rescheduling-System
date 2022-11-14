<?php
$dbcon=mysqli_connect("localhost","root","","project167");
error_reporting(0);
$sql="select * from admin, faculty, student";
$data=mysqli_query($dbcon,$sql);
echo "<br>Successfully Connected to New Table ";
if(!$data){
	die("Can't use project167 :".mysqli_error());
}
?>