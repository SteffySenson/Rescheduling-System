<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$block_name=$_GET['rn'];
$floor_name=$_GET['cn'];
$sql="DELETE FROM floor_ WHERE block_id='$block_name' and floor_name='$floor_name'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewfloor.php');
}else{
   echo " No record is Deleted";
}
