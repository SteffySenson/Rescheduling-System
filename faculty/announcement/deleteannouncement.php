<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$announcement_name=$_GET['rn'];
$sql="DELETE FROM announcement_ WHERE announcement_name='$announcement_name'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewannouncement.php');
}else{
   echo " No record is Deleted";
}
