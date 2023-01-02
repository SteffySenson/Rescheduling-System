<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$subject_name=$_GET['rn'];
$progress_id=$_GET['cn'];
$sql="DELETE FROM progress_ WHERE progress_id='$progress_id'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewprogress.php');
}else{
   echo " No record is Deleted";
}
