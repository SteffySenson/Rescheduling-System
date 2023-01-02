<?php
@include 'config.php';
error_reporting(0);
if(isset($_POST['aid'])){
      $query=mysqli_query($conn,"select * from semester_ where department_id=".$_POST['aid']);
      $output .='<option value="">Select a semester</option>';
      while($row=mysqli_fetch_array($query)){
        $output .= "<option value='$row[semester_id]'>".$row['semester_no']."</option>";
     }
    echo $output;
}

if(isset($_POST['said']) && ($_POST['vaid'])){
  $said=$_POST['said'];
  $vaid=$_POST['vaid'];
      $query=mysqli_query($conn,"select * from subject_ where semester_no='$vaid'");
      $output1 .='<option value="">Select a subject</option>';
      while($row=mysqli_fetch_array($query)){
        $output1 .= "<option value='$row[subject_code]'>".$row['subject_name']."</option>";
     }
    echo $output1;
}


?>