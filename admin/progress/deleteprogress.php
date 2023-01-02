<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$announcement_name=$_GET['rn'];
$progress_name=$_GET['cn'];
$sql="DELETE FROM progress_ WHERE announcement_id='$announcement_name' and progress_name='$progress_name'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewprogress.php');
}else{
   echo " No record is Deleted";
}
