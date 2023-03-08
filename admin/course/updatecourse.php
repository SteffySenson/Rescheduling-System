<?php

@include 'config.php';

$rn=$_GET['rn'];
$fn=$_GET['fn'];

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
 
    $select = " SELECT * FROM course WHERE C_Name = '$name' ";
 
    $result = mysqli_query($conn, $select);
 
    if(true){
 
        $insert = " update course set C_Name = '$name', Semesters = '$desc' where C_name = '$rn' ";
        $res=mysqli_query($conn, $insert);
        if($res)
          {
             $error[] = 'Course updated succesfully';
          }
 
    }else{
             $error[] = 'Course name not match';
       }
    }
 



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
      .btn{
   display: inline-block;
   padding:5px 15px;
   /*font-size: 10px;*/
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.btn:hover{
   background: darkorange;
}
</style>
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Update Course</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" value="<?php echo "$rn" ?>">
      <input type="textbox" rows="3" name="desc" value="<?php echo "$fn" ?>">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='viewcourse.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>



</div>



</body>
</html>