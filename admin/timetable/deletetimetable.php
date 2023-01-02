<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$room_no=$_GET['rr'];
$sql="DELETE FROM timetable_ WHERE subject_code='$room_no'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewtimetable.php');
}else{
   echo " No record is Deleted";
}

