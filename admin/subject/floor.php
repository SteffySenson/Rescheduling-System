<?php
@include 'config.php';
error_reporting(0);
if(isset($_POST['aid'])){
      $query=mysqli_query($conn,"select * from course where Department_Id=".$_POST['aid']);
      $output .='<option value="">Select a Course</option>';
      while($row=mysqli_fetch_array($query)){
        $output .= "<option value='$row[Course_Id]'>".$row['C_Name']."</option>";
     }
    echo $output;
}
if(isset($_POST['vaid'])){
  $said=$_POST['vaid'];
      $query=mysqli_query($conn,"select * from users where Department_Id='$said' and U_Type='Teacher'");
      $output1 .='<option value="">Select a Teacher</option>';
      while($row=mysqli_fetch_array($query)){
        $output1 .= "<option value='$row[User_Id]'>".$row['U_Name']."</option>";
     }
    echo $output1;
}
?>