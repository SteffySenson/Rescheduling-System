

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.container{
  
   min-height: 80vh;
   display: block;
   float: left;
   padding: 5px 5px;
   width: 70vh;
   margin: 0px;

}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 26px;
   color:#333;
}

.container .content h3 span{
   background: darkorange;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:darkorange;
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: flex;
   justify-content:space-between;
   align-content:center;
   padding: 5px 20px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 60px;
   text-transform: capitalize;
   border: 1px solid darkorange;
   float: left;
   clear: both;
   width: 400px;
}

.container .content .btn:hover{
   background: darkorange;
}
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
<?php
include("nav.php");
?>
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['faculty_name'])){
   //header('location:login_form.php');
}

?>
   


<div class="container" style="padding: 0px 0px; margin: 200px">

<div class="content">
    <?php
    $id=$_SESSION['user_id'];
    $sql="SELECT * from users where User_id=$id ";
        $data=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($data);
        $did=$row['Department_Id'];
        $sql="SELECT * from course where Department_Id=$did";
        $data=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($data)){
            echo '<a href="schedule.php?q='.$row['Course_Id'].'" target="_top" class="btn">'.$row['C_Name'].'</a>';
        }
    ?>
</div>
</div>
</body>
</html>

<!--<a href="reallocation.php"><h6 style= margin:20px;><button>Request for Reallocation</h6></button></a>
-->
<?php


?>
</body>
</html>