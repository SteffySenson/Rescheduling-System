<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$block_name=$_GET['rn'];
$progress_name=$_GET['cn'];
$room_no=$_GET['rr'];
$sql="DELETE FROM room_ WHERE block_id='$block_name' and progress_id='$progress_name' and room_no='$room_no'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewroom.php');
}else{
   echo " No record is Deleted";
}
