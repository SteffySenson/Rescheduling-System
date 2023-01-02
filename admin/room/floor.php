<?php
@include 'config.php';
error_reporting(0);

      $query=mysqli_query($conn,"select * from progress_ where block_id=".$_POST['aid']);
      $output .='<option value="">Select a progress</option>';
      while($row=mysqli_fetch_array($query)){
        $output .= "<option value='$row[progress_id]'>".$row['progress_name']."</option>";
     }
    echo $output;
?>