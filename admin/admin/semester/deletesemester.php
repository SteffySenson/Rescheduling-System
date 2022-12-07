<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$block_name=$_GET['rn'];
$floor_name=$_GET['cn'];
$sql="DELETE FROM semester_ WHERE department_id='$block_name' and semester_no='$floor_name'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewsemester.php');
}else{
   echo " No record is Deleted";
}
