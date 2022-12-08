<?php
@include 'config.php';
error_reporting(0);

      $query=mysqli_query($conn,"select * from semester_ where department_id=".$_POST['aid']);
      $output .='<option value="">Select a semester</option>';
      while($row=mysqli_fetch_array($query)){
        $output .= "<option value='$row[semester_id]'>".$row['semester_no']."</option>";
     }
    echo $output;
?>