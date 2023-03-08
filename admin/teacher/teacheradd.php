<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $dname = mysqli_real_escape_string($conn, $_POST['dname']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $rname = mysqli_real_escape_string($conn, $_POST['rname']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM users WHERE E_Mail = '$email' && Password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

         $insert = "INSERT INTO users(Roll_No, U_Name, E_Mail, Phone_No,password,Department_Id,U_Type) VALUES('$rname','$name','$email','$phone','$pass','$dname','Teacher')";      
         mysqli_query($conn, $insert);
         $error[] = 'user added succesfully!';
    
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
      <input type="text" name="rname" required placeholder="enter register number">
      <input type="text" name="name" required placeholder="enter name">
      <?php
      $query=mysqli_query($conn,"select * from department_");
      ?>
      <select name="dname" id="block_">
      <option value="">Select a Department</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[Department_Id]'>".$row['D_Name']."</option>";
         }
         ?>
         
      </select>
      <input type="text" name="phone" required placeholder="enter your phone number">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">

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