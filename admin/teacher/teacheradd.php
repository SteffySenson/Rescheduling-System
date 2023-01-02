<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $rname = mysqli_real_escape_string($conn, $_POST['rname']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type,user_no) VALUES('$name','$email','$pass','$user_type',$rname)";
         $insert1 = "INSERT INTO student_(stud_id, stud_name, stud_dep, stud_sem, stud_phone, stud_email) VALUES('$rname','$name','$bname','$fname','$phone','$email')";
         mysqli_query($conn, $insert);
         mysqli_query($conn, $insert1);
         $error[] = 'user added succesfully!';
      }
   }

};


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
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="rname" required placeholder="enter your register number">
      <input type="text" name="name" required placeholder="enter your name">
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
      <input type="text" name="phone" required placeholder="enter your phone number">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
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