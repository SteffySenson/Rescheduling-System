<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

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
   display: block;
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
</style>
</head>
<body>
   <?php
   include("admin_home.php");
   ?>
   
<div class="container">

   <div class="content">
      <a href="./announcement/announcementadd.php"target="_top" class="btn">Add Announcement</a>
      <a href="./announcement/viewannouncement.php"target="_top" class="btn">View Announcement</a>
      <a href="./progress/progressadd.php"target="_top" class="btn">Add Progress</a>
      <a href="./progress/viewprogress.php"target="_top" class="btn">View Progress</a>
      <a href="./department/departmentadd.php"target="_top" class="btn">Add Department</a>
      <a href="./department/viewdepartment.php"target="_top" class="btn">View Department</a>
      <a href="./semester/semesteradd.php"target="_top" class="btn">Add Semester</a>
      <a href="./semester/viewsemester.php"target="_top" class="btn">View Semester</a>
      <a href="./subject/subjectadd.php"target="_top" class="btn">Add Subject</a>
      <a href="./subject/viewsubject.php"target="_top" class="btn">View Subject</a>
      <a href="./student/studentadd.php"target="_top" class="btn">Add Student</a>
      <a href="./student/viewstudent.php"target="_top" class="btn">View Student</a>
      <a href="./teacher/teacheradd.php"target="_top" class="btn">Add Teacher</a>
      <a href="./teacher/viewteacher.php"target="_top" class="btn">View Teacher</a>
   </div>

</div>

<div class="container" style="padding: 0px 0px; margin: 200px">
<h1 style="padding: 30px 0px; text-align:center">
      Class Hour Scheduling System
</h1>
   <div class="content">
   <a href="./timetable/timetableadd.php"target="_top" class="btn">Add Schedule</a>
   <a href="./timetable/schedule.php"target="_top" class="btn">View Schedule</a>
   <a href="./timetable/schedule.php"target="_top" class="btn">Add Reallocation</a>
   <a href="./timetable/schedule.php"target="_top" class="btn">View Reallocation</a>
  
</div>
</body>
</html>
