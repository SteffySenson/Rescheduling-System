<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $rname = mysqli_real_escape_string($conn, $_POST['rname']);
   $rows = mysqli_real_escape_string($conn, $_POST['rows']);
   $cols = mysqli_real_escape_string($conn, $_POST['cols']);

   $select = " SELECT * FROM room_ WHERE room_no = '$rname' and block_id = '$bname' and floor_id = '$fname' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'room already exist!';

   }else{
         $insert = "INSERT INTO room_(block_id,floor_id,room_no, rows_,cols_) VALUES('$bname','$fname','$rname','$rows','$cols')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'room added succesfully';
         }
      }
   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="jquery-3.6.0.min.js"></script> 
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Add Room</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      $query=mysqli_query($conn,"select * from block_");
      ?>
      <select name="bname" id="block_">
      <option value="">Select a block</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[block_id]'>".$row['block_name']."</option>";
         }
         ?>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from floor_");
      ?>
      <select name="fname" id="floor_">
      <option value="">Select a floor</option>
         
      </select>
      <input type="text" name="rname" required placeholder="Enter the room name">
      <input type="text" name="rows" required placeholder="Enter the number of rows">
      <input type="text" name="cols" required placeholder="Enter the number of columns">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
   $("#block_").change(function(){
      var aid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {aid:aid},
         success:function(data){
            $("#floor_").html(data);
         }
      });
      });
   });
</script>
</body>
</html>