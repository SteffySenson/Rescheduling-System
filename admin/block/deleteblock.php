<?php
@include 'config.php';
error_reporting(0);

//if (isset($_POST['delete'])){
$block_name=$_GET['rn'];
$sql="DELETE FROM block_ WHERE block_name='$block_name'";
$data=mysqli_query($conn,$sql);
if($data>0){
   header('location:viewblock.php');
}else{
   echo " No record is Deleted";
}
