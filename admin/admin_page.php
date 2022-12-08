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
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span><?php echo $_SESSION['admin_name'] ?></span></h3>
      <h1>welcome</h1><br>
      <a href="./block/blockadd.php" class="btn">Add Block</a>
      <a href="./block/viewblock.php" class="btn">View Block</a>
      <a href="./floor/flooradd.php" class="btn">Add Floor</a>
      <a href="./floor/viewfloor.php" class="btn">View Floor</a>
      <a href="./room/roomadd.php" class="btn">Add Room</a>
      <a href="./room/viewroom.php" class="btn">View Room</a><br><br>
      <a href="./department/departmentadd.php" class="btn">Add Department</a>
      <a href="./department/viewdepartment.php" class="btn">View Department</a>
      <a href="./semester/semesteradd.php" class="btn">Add Semester</a>
      <a href="./semester/viewsemester.php" class="btn">View Semester</a><br> <br>
      <a href="./subject/subjectadd.php" class="btn">Add Subject</a>
      <a href="./subject/viewsubject.php" class="btn">View Subject</a>
      <a href="./student/studentadd.php" class="btn">Add Student</a>
      <a href="./student/viewstudent.php" class="btn">View Student</a>
      <a href="./teacher/teacheradd.php" class="btn">Add Teacher</a>
      <a href="./teacher/viewteacher.php" class="btn">View Teacher</a><br> <br>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>