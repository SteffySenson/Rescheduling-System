<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $desc = mysqli_real_escape_string($conn, $_POST['desc']);

   $select = " SELECT * FROM announcement_ WHERE announcement_name = '$name' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'announcement already exist!';

   }else{
         $insert = "INSERT INTO announcement_(announcement_name, announcement_desc) VALUES('$name','$desc')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'announcement added succesfully';
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
   <title>Add</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
      .btn{
   /*font-size: 10px;*/
   color:black;
}

.btn:hover{
   color: darkorange;
}
</style>
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Add announcement</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter the announcement name">
      <input type="textbox" rows="3" name="desc" required placeholder="Enter the announcement description">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>
</body>
</html>