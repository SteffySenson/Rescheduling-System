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

   <style>
    
    table {
        position: absolute;
        left: 40%;
        top: 55%;
        transform: translate(-30%, -30%);
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
        background-color: darkorange;
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
   background: darkorange;
}
</style>
</head>
<body>
   
      <?php
      $sql = "SELECT su.*,cu.C_Name, te.tea_name FROM course cu,subject_ su, teacher_ te where su.Course_Id=cu.Course_Id and su.Teacher_Id=te.tea_id";
      if ($res = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($res) > 0) {
      echo "<table>";
      echo "<tr id='header'>";
      echo "<th>Course Name</th>";
      echo "<th>Semester Number</th>";
      echo "<th>Subject Code</th>";
      echo "<th>Subject Name</th>";
      echo "<th>Update</th>";
      echo "<th>Delete</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>".$row['C_Name']."</td>";
      echo "<td>".$row['Sem_No']."</td>";
      echo "<td>".$row['sub_code']."</td>";
      echo "<td>".$row['S_Name']."</td>";
      echo "<td><a href='updatesubject.php?rn=$row[C_Name]&cn=$row[Sem_No]&rr=$row[sub_code]&row=$row[S_Name]' class='btn'>Update</a></td>";
      echo "<td><a href='deletesubject.php?rn=$row[Subject_Id]&cn=$row[Sem_No]&rr=$row[sub_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo "</tr>";
      }
      echo "<tr>";
      echo "<a href='../admin_page.php' class='btn'>Go Back</a>";
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