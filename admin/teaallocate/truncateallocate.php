<?php
@include 'config.php';
error_reporting(0);

$sql="truncate seat1_ ";
$data=mysqli_query($conn,$sql);
if($data>0 ){
   ?>
   <script>
    {
         alert('truncated Succesfully');
         
    }
</script>

<?php
header('location:../management/allocationmanagement.php');
}else{
   echo " No record is Deleted";
}

?>
