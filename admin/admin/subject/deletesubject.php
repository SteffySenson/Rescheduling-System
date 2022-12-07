<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$block_name=$_GET['rn'];
$floor_name=$_GET['cn'];
$room_no=$_GET['rr'];
$sql="DELETE FROM subject_ WHERE department_id='$block_name' and semester_no='$floor_name' and subject_code='$room_no'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewsubject.php');
}else{
   echo " No record is Deleted";
}

