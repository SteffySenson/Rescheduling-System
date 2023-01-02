<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $fubname = mysqli_real_escape_string($conn, $_POST['fubname']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $sname = mysqli_real_escape_string($conn, $_POST['sname']);

   $select = " SELECT * FROM timetable_ WHERE subject_code = '$fubname' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'timetable already exist!';

   }else{
         $insert = "INSERT INTO timetable_(subject_code, date_,time_) VALUES('$fubname','$date','$sname')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'timetable added succesfully';
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
      <h3>Add Timetable</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      $query=mysqli_query($conn,"select * from department_");
      ?>
      <select name="bname" id="block_">
      <option value="">Select a Department</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[department_id]'>".$row['department_name']."</option>";
         }
         ?>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from semester_");
      ?>
      <select name="fname" id="floor_">
      <option value="">Select a Semester</option>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from subject_");
      ?>
      <select name="fubname" id="subject_">
      <option value="">Select a Subject</option>
         
      </select>

      
      <input type="date" name="date" required placeholder="Enter the date of exam">
      <select name="sname">
         <option value="">Select an option</option>
         <option value="Forenoon">Forenoon</option>
         <option value="Afternoon">Afternoon</option>
      </select>
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../management/timetablemanagement.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
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

$(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#block_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject_").html(data);
         }
      });
      });
   });
</script>
</body>
</html>