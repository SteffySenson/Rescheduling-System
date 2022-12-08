<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['faculty_name'])){
   header('location:login_form.php');
}

?>
<html>
    <head>
        <title>
            Class Hour Scheduling System
        </title>
        <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
}
</style>
    </head>
<body>
<?php
include("nav.php");
?>
    <center>
       <!-- <div style="display:flex; justify-content:center; align-self:center;">-->
        <div style="margin:18%;">
           <font size=20px style=color:darkorange;><b> CLASS HOUR SCHEDULING SYSTEM</b></h1>
        </div>
</center>
</body>
</html>