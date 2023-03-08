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
        margin-left: auto;
        margin-right: auto;
        
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
      $sql = "SELECT te.*,de.*, cu.*, su.* FROM teacher_ te,department_ de, course cu, subject_ su where te.tea_dep=de.Department_Id and te.tea_id=su.Teacher_Id;";
      if ($res = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($res) > 0) {
      echo "<table>";
      echo "<tr id='header'>";
      echo "<th>ID</th>";
      echo "<th>Name</th>";
      echo "<th>Department</th>";
      echo "<th>Course</th>";
      echo "<th>Subject Name</th>";
      echo "<th>Phone</th>";
      echo "<th>Email</th>";
      echo "<th>Update</th>";
      echo "<th>Delete</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>".$row['tea_id']."</td>";
      echo "<td>".$row['tea_name']."</td>";
      echo "<td>".$row['D_Name']."</td>";
      echo "<td>".$row['C_Name']."</td>";
      echo "<td>".$row['subject_name']."</td>";
      echo "<td>".$row['tea_phone']."</td>";
      echo "<td>".$row['tea_email']."</td>";
      echo "<td><a href='updatestudent.php?rn=$row[tea_id]&cn=$row[tea_name]&rr=$row[D_Name]&row=$row[C_Name]&col=$row[subject_name]&sub=$row[tea_phone]&email=$row[tea_email]' class='btn'>Update</a></td>";
      echo "<td><a href='deletestudent.php?rn=$row[tea_id]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
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