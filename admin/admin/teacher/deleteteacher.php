<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$block_name=$_GET['rn'];
$sql="DELETE FROM student_ WHERE stud_id='$block_name'";
$sql1="DELETE FROM user_form WHERE user_no='$block_name'";

$data=mysqli_query($conn,$sql);
$data1=mysqli_query($conn,$sql1);

if($data>0 && $data1>0){
   header('location:viewstudent.php');
}else{
   echo " No record is Deleted";
}
