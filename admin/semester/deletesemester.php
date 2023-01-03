<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$department_id=$_GET['rn'];
$semester_no=$_GET['cn'];
$sql="DELETE FROM semester_ WHERE department_id='$department_id' and semester_no='$semester_no";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewsemester.php');
}else{
   echo " No record is Deleted";
}
