<?php

@include 'config.php';
$sql="select * from department";
         $data=mysqli_query($conn,$sql);
if(isset($_POST['submit'])){
   $reg=$_POST['reg'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $did=$_POST['depart'];
   $select = " SELECT * FROM users WHERE E_Mail = '$email' && Password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         if($user_type=="teacher"||$user_type=="user"){
            $insert = "INSERT INTO Users(Roll_No,U_Name, E_Mail, Password,U_Type,Department_Id) VALUES($reg,'$name','$email','$pass','$user_type',$did)";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
            exit;
         }
         $insert = "INSERT INTO Users(Roll_No,U_Name, E_Mail, Password,U_Type) VALUES($reg,'$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


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
      <h3>register</h3>
      <?php
      
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      
      ?>
      <input type="text" name="reg" required placeholder="Enter your regno">
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="*Confirm your password">
      
      <select name="depart">
         <option value="0">Select a department</option>
         <?php
        
         
         while($row=mysqli_fetch_array($data)){
            echo '<option value="'.$row['Department_Id'].'" >'.$row['D_Name'].'</option>';
         }
         ?>
      </select>
      <select name="user_type">
         <option value="user">User</option>
         <option value="teacher">Faculty</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">login</a></p>
   </form>

</div>

</body>
</html>