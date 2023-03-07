<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$department_name=$_GET['rn'];
$sql="DELETE FROM course WHERE department_name='$department_name'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewdepartment.php');
}else{
   echo " No record is Deleted";
}
