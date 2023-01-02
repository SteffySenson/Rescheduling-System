<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $start = mysqli_real_escape_string($conn, $_POST['start']);

   $select = " SELECT * FROM seat1_ WHERE tea_id = '$start' or room_id = '$bname' ";
   $result = mysqli_query($conn, $select);
   $select1 = " SELECT * FROM teacher_ te,timetable_ ti,room_ ro WHERE te.tea_id='$start' and ti.time_id='$fname' and room_no='$bname'";
   $result1 = mysqli_query($conn, $select1);
   if(mysqli_num_rows($result) > 0 && mysqli_num_rows($result1)>0){

      $error[] = 'Allocation already exist!';

   }
   else{
         while($row=mysqli_fetch_array($result1)){
            $insert = "INSERT INTO seat1_(room_id,tea_id,time_id) VALUES('$bname','$start','$fname')";
            $res=mysqli_query($conn, $insert);
            
         }
            if($res)
         {
            $error[] = 'seat allocation succesfull';
         }
         else{
            $error[] = 'seat allocation not succesfull';
         }
      }
   }


 
   



?>

<!DOCTYPE html>
<html lang="en">
<head>
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
      <h3>Add Allocation</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      $query=mysqli_query($conn,"SELECT * FROM room_ where status='active'");
      ?>
      <select name="bname">
      <option value="">Select a active room</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[room_no]'>"."Room Number: ".$row['room_no']."</option>";
         }
         ?>
         </select>

      <?php
      //$query=mysqli_query($conn,"SELECT DISTINCT date_ FROM timetable_ ");
      $query=mysqli_query($conn,"SELECT * FROM timetable_ ");
      ?>
      <select name="fname">
      <option value="">Select a exam date</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[time_id]'>"."Date: ".$row['date_']."</option>";
         }
         ?>
         
      </select>

<?php
      $query=mysqli_query($conn,"SELECT * FROM teacher_ ");
      ?>
      <select name="start">
      <option value="">Select a teacher</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[tea_id]'>".$row['tea_name']."</option>";
         }
         ?>
         </select>

      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../management/allocationmanagement.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>
</body>
</html>