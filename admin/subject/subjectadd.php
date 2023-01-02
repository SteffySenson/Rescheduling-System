<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $rname = mysqli_real_escape_string($conn, $_POST['rname']);
   $sname = mysqli_real_escape_string($conn, $_POST['sname']);

   $select = " SELECT * FROM subject_ WHERE subject_code = '$rname' and department_id = '$bname' and semester_no = '$fname' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'subject already exist!';

   }else{
         $insert = "INSERT INTO subject_(department_id,semester_no,subject_code, subject_name) VALUES('$bname','$fname','$rname','$sname')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'subject added succesfully';
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
      <h3>Add Subject</h3>
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
      <select name="fname" id="progress_">
      <option value="">Select a Semester</option>
         
      </select>
      <input type="text" name="rname" required placeholder="Enter the subject ID">
      <input type="text" name="sname" required placeholder="Enter the subject name">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
   $("#block_").change(function(){
      var aid= $(this).val();
      $.ajax({
         url:'progress.php',
         method:'POST',
         data: {aid:aid},
         success:function(data){
            $("#progress_").html(data);
         }
      });
      });
   });
</script>
</body>
</html>