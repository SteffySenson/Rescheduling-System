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
      $idd= mysqli_query($conn, "SELECT tea_id from teacher_ where tea_name='$ab' ");
      $iddd=mysqli_fetch_array($idd);
      $val=$iddd['tea_id'];
      $sql = "SELECT ti.*,su.*,stu.*,de.department_name,de.department_id,se.semester_no,se.semester_id, ro.*,sea.*,bl.*,fl.* FROM department_ de,semester_ se,subject_ su, timetable_ ti, room_ ro, floor_ fl, block_ bl, seat1_ sea, teacher_ stu where ro.floor_id=fl.floor_id and fl.block_id=bl.block_id and ti.subject_code = su.subject_code and su.semester_no = se.semester_id and se.department_id = de.department_id and sea.room_id=ro.room_no and sea.tea_id=stu.tea_id  and sea.time_id=ti.time_id and stu.tea_id='$val'";
      if ($res = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($res) > 0) {
      echo "<table>";
      echo "<tr id='header'>";
      echo "<th>Department Name</th>";
      echo "<th>Teacher Name</th>";
      echo "<th>Date</th>";
    echo "<th>Time</th>";
      echo "<th>Block</th>";
      echo "<th>Floor</th>";
      echo "<th>Rooom</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>".$row['department_name']."</td>";
      echo "<td>".$row['tea_name']."</td>";
      echo "<td>".$row['date_']."</td>";
    echo "<td>".$row['time_']."</td>";
      echo "<td>".$row['block_name']."</td>";
      echo "<td>".$row['floor_name']."</td>";
      echo "<td>".$row['room_no']."</td>";
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