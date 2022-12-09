<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
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

   <style>
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 5px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: crimson;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
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
   background: crimson;
}
</style>
</head>
<body>
   
      <?php
      $ab=$_SESSION['user_name'];
      $idd= mysqli_query($conn, "SELECT tea_dep from teacher_ where tea_name='$ab' ");
      $iddd=mysqli_fetch_array($idd);
      $val=$iddd['tea_dep'];
      $sql = "SELECT ti.*,su.*,de.department_name,de.department_id,se.semester_no FROM department_ de,semester_ se,subject_ su, timetable_ ti where ti.subject_code = su.subject_code and su.semester_no = se.semester_id and se.department_id = de.department_id order by de.department_name";
      if ($res = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($res) > 0) {
      echo "<table>";
      echo "<tr id='header'>";
      echo "<th>Department Name</th>";
      echo "<th>Semester Number</th>";
      echo "<th>Subject Name</th>";
      echo "<th>Date</th>";
      echo "<th>Time</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>".$row['department_name']."</td>";
      echo "<td>".$row['semester_no']."</td>";
      echo "<td>".$row['subject_name']."</td>";
      echo "<td>".$row['date_']."</td>";
      echo "<td>".$row['time_']."</td>";
      echo "</tr>";
      }
      echo "<tr>";
      echo "<a href='../user_page.php' class='btn'>Go Back</a>";
      echo "</tr>";
      echo "</table>";
      
      }
      else {
      echo "No matching records are found.";
      }
      
      }
      ?>
<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete?');
    }
</script>

</body>
</html>