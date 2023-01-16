<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<html>
    <head>
        <title>
            Class Schedule
        </title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            #root{
                display: flex;
                background-color:light blue;
            }
            #schedule {
             font-family: 'Poppins', sans-serif;
              font-size: small;
              border-collapse: collapse;
              width: 65%;
              margin:80px;
            }
             #schedule a {
                text-decoration: none;
                 color:black;
            }
            
            #schedule td, #schedule th {
              border: 1px solid #ddd;
              padding: 2px;
            } 
            #schedule tr:nth-child(even){background-color: #f2f2f2;}
            /*#schedule tr:hover {background-color: #ddd;}*/
            #schedule td:hover{background-color: darkgray;}
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
$sql = "SELECT ti.*,su.*,de.department_name,de.department_id,se.semester_no FROM department_ de,semester_ se,subject_ su, timetable_ ti where ti.subject_code = su.subject_code and su.semester_no = se.semester_id and se.department_id = de.department_id order by de.department_name";
if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
      echo " <div>";
      echo " <table id='schedule' border='5' cellspacing='0' align='center' font-size='2'>";
      echo " <tr>";
      echo " <td align='center' height='45' width='150'><b>DAY</b></td>";
      echo " <td align='center' height='45' width='100'><b>SEM</b></td>";
      echo " <td align='center' height='45' width='100'><b>I</b></td>";
      echo " <td align='center' height='45' width='100'><b>II</b></td>";
      echo " <td align='center' height='45' width='100'><b>III</b></td>";
      echo " <td align='center' height='45' width='100'><b>IV</b></td>";
      echo " <td align='center' height='45' width='100'><b>V</b></td>";
      echo " </tr>";
      while ($row = mysqli_fetch_array($res)) {
      echo " <tr>";
      echo " <td align='center' height='25' rowspan=3>";
      echo " <b>MONDAY</b></td>";
      echo " <td align='center' height='25'>S2</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>C++ LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>C++ LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>C++ LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>ENG</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>MATHS</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S4</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DAA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>SASE</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LINUX</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP LAB</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S6</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DM</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DM</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LAB</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25' rowspan=3>";
      echo " <b>TUESDAY</b>";
      echo " </td>";
      echo " <td align='center' height='25'>S2</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DBMS</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>COA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>ENG</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>MATHS</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CPP</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S4</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LINUX LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LINUX LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DAA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>OR</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S6</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DM</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PYTHON</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PYTHON</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25' rowspan=3>";
      echo " <b>WEDNESDAY</b>";
      echo " </td>";
      echo " <td align='center' height='25'>S2</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>ENG</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>COA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CPP</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>MATHS</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DBMS</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S4</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>SASE</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>OR</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LINUX</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP LAB</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S6</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PYTHON</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DM</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DM</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25' rowspan=3>";
      echo " <b>THURSDAY</b>";
      echo " </td>";
      echo " <td align='center' height='25'>S2</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CPP</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>ENG</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>COA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DBMS</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>MATHS</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S4</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>OR</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>SASE</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DAA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LINUX</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S6</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>CLOUD</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PYTHON</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PYTON</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DM</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25' rowspan=3>";
      echo " <b>FRIDAY</b>";
      echo " </td>";
      echo " <td align='center' height='25'>S2</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>COA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DBMS</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>ENG</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DBMS LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DBMS LAB</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S4</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>DAA</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>LINUX</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PHP</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>OR</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>SASE</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
      echo " <tr>";
      echo " <td align='center' height='25'>S6</td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PROJECT LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PROJECT LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PROJECT LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PROJECT LAB</a></td>";
      echo " <td align='center' height='25'><a href='timetableadd.php'>PROJECT LAB</a></td>";
      echo "<td><a href='updatetimetable.php?rn=$row[department_name]&cn=$row[semester_no]&rr=$row[subject_code]&row=$row[subject_name]&date=$row[date_]&time=$row[time_]' class='btn'>Update</a></td>";
      echo "<td><a href='deletetimetable.php?rr=$row[subject_code]' onclick='return checkdelete()' class='btn'>Delete</a></td>";
      echo " </tr>";
     }
      echo "<tr>";
      echo "<a href='../admin/admin_page.php' class='btn'>Go Back</a>";
      echo "</tr>";
      echo "</table>";
      echo " </div>";
      include("slide.php");
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
