<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $bname = mysqli_real_escape_string($conn, $_POST['bname']);

   $select = " SELECT * FROM semester_ WHERE department_id = '$bname' and semester_no = '$fname' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Semester already exist!';

   }else{
         $insert = "INSERT INTO semester_(department_id,semester_no) VALUES('$bname','$fname')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'Semester added succesfully';
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
      <h3>Add Semester</h3>
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
      <select name="bname">
      <option value="">Select a department</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[department_id]'>".$row['department_name']."</option>";
         }
         ?>
         
      </select>
      <input type="text" name="fname" required placeholder="Enter the semester number">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>
</body>
</html>