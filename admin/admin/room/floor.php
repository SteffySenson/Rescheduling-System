<?php
@include 'config.php';
error_reporting(0);

      $query=mysqli_query($conn,"select * from floor_ where block_id=".$_POST['aid']);
      $output .='<option value="">Select a floor</option>';
      while($row=mysqli_fetch_array($query)){
        $output .= "<option value='$row[floor_id]'>".$row['floor_name']."</option>";
     }
    echo $output;
?>