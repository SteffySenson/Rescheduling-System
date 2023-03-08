<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   //header('location:login_form.php');
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
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: -80px 80px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button1:hover {
  background-color: #555555;
  color: white;
}
            </style>
    </head>
    <body>
    <?php
include("nav.php");
//$sql = "SELECT ti.*,su.*,de.department_name,de.department_id,se.semester_no FROM department_ de,semester_ se,subject_ su, timetable_ ti where ti.subject_code = su.subject_code and su.semester_no = se.semester_id and se.department_id = de.department_id order by de.department_name";
//if ($res = mysqli_query($conn, $sql)) {
//    if (mysqli_num_rows($res) > 0) {
  $cid=@$_GET['q'];
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
      echo " <tr>";
      $sql="select * from schedule where Course_Id=$cid order by Day";
      $data=mysqli_query($conn,$sql);
      $uid=$_SESSION['faculty_id'];
      $sel="SELECT * from users where User_Id=$uid";
      $man=mysqli_query($conn,$sel);
      $rows=mysqli_fetch_array($man);
      $did=$rows['Department_Id'];
      $i=1;
      $j=3;
      while($row=mysqli_fetch_array($data)){
        if($i%2==1){
          $i++;
          continue;
        }
          if($j%3==0){
          echo " <td align='center' height='25' rowspan=3>";
          echo " <b>".$row['Day']."</b></td>";
          $i=2;
          }
          $sid=$row['Schedule_Id'];
          
          echo " <td align='center' height='25'>S".$i."</td>";
          $sub_id=$row['P1'];
          if($sub_id!=0){
            $sql2="select * from subject where Subject_Id=$sub_id";
            $data2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($data2);
            $sname=$row2['S_Name'];
            $tid2=$row2['Teacher_Id'];
            $dat=date("Y/m/d");
            $s="select * from reallocate where Schedule_Id=$sid and Date=$dat and tid2!=0 and period=1";
            $d=mysqli_query($conn,$s);
            if(mysqli_num_rows($d)>0){
                $r=mysqli_fetch_array($d);
                $sub=$r['sub'];
                $s2="select * from subject where Subject_Id=$sub";
                $d2=mysqli_query($conn,$s2);
                $r2=mysqli_fetch_array($d2);
                echo " <td align='center' height='25'>".$r2['S_Name']."</td>";
            }
            else{
            if($tid2==$uid){
              echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=3&n=1&sem=".$i."&eid=".$sid."'>".$sname."</a></td>";
            }
            else{
            echo " <td align='center' height='25'>".$sname."</td>";
            }
        }
        }
          else {
            echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=2&n=1&sem=".$i."&eid=".$sid."'>".$row['P1']."</a></td>";
          }
          $sub_id=$row['P2'];
          if($sub_id!=0){
            $sql2="select * from subject where Subject_Id=$sub_id";
            $data2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($data2);
            $sname=$row2['S_Name'];
            $tid2=$row2['Teacher_Id'];
            $dat=date("Y/m/d");
         
            $s="select * from reallocate where Schedule_Id=$sid and Date=$dat and tid2!=0 and period=2";
            $d=mysqli_query($conn,$s);
            if(mysqli_num_rows($d)>0){
                $r=mysqli_fetch_array($d);
                $sub=$r['sub'];
                $s2="select * from subject where Subject_Id=$sub";
                $d2=mysqli_query($conn,$s2);
                $r2=mysqli_fetch_array($d2);
                echo " <td align='center' height='25'>".$r2['S_Name']."</td>";
            }
            else{
            if($tid2==$uid){
              echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=3&n=2&sem=".$i."&eid=".$sid."'>".$sname."</a></td>";
            }
            else{
            echo " <td align='center' height='25'>".$sname."</td>";
            }
        }
        }
          else {
            echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=2&n=2&sem=".$i."&eid=".$sid."'>".$row['P2']."</a></td>";
          }
          $sub_id=$row['P3'];
          if($sub_id!=0){
            $sql2="select * from subject where Subject_Id=$sub_id";
            $data2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($data2);
            $sname=$row2['S_Name'];
            $tid2=$row2['Teacher_Id'];
            $dat=date("Y/m/d");
            $dat=date("Y/m/d");
            $s="select * from reallocate where Schedule_Id=$sid and Date=$dat and tid2!=0 and period=3";
            $d=mysqli_query($conn,$s);
            if(mysqli_num_rows($d)>0){
                $r=mysqli_fetch_array($d);
                $sub=$r['sub'];
                $s2="select * from subject where Subject_Id=$sub";
                $d2=mysqli_query($conn,$s2);
                $r2=mysqli_fetch_array($d2);
                echo " <td align='center' height='25'>".$r2['S_Name']."</td>";
            }
            else{
            if($tid2==$uid){
              echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=3&n=3&sem=".$i."&eid=".$sid."'>".$sname."</a></td>";
            }
            else{
            echo " <td align='center' height='25'>".$sname."</td>";
            }
        }
        }
          else {
            echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=2&n=3&sem=".$i."&eid=".$sid."'>".$row['P3']."</a></td>";
          }
          $sub_id=$row['P4'];
          if($sub_id!=0){
            $sql2="select * from subject where Subject_Id=$sub_id";
            $data2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($data2);
            $sname=$row2['S_Name'];
            $tid2=$row2['Teacher_Id'];
            $dat=date("Y/m/d");
            $dat=date("Y/m/d");
            $s="select * from reallocate where Schedule_Id=$sid and Date=$dat and tid2!=0 and period=4";
            $d=mysqli_query($conn,$s);
            if(mysqli_num_rows($d)>0){
                $r=mysqli_fetch_array($d);
                $sub=$r['sub'];
                $s2="select * from subject where Subject_Id=$sub";
                $d2=mysqli_query($conn,$s2);
                $r2=mysqli_fetch_array($d2);
                echo " <td align='center' height='25'>".$r2['S_Name']."</td>";
            }
            else{
            if($tid2==$uid){
              echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=3&n=4&sem=".$i."&eid=".$sid."'>".$sname."</a></td>";
            }
            else{
            echo " <td align='center' height='25'>".$sname."</td>";
            }
        }
        }
          else {
            echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=2&n=4&sem=".$i."&eid=".$sid."'>".$row['P4']."</a></td>";
          }
          $sub_id=$row['P5'];
          if($sub_id!=0){
            $sql2="select * from subject where Subject_Id=$sub_id";
            $data2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($data2);
            $sname=$row2['S_Name'];
            $tid2=$row2['Teacher_Id'];
            $dat=date("Y/m/d"   );
            $dat=date("Y/m/d");
            $s="select * from reallocate where Schedule_Id=$sid and Date=$dat and tid2!=0 and period=5";
            $d=mysqli_query($conn,$s);
            if(mysqli_num_rows($d)>0){
                $r=mysqli_fetch_array($d);
                $sub=$r['sub'];
                $s2="select * from subject where Subject_Id=$sub";
                $d2=mysqli_query($conn,$s2);
                $r2=mysqli_fetch_array($d2);
                echo " <td align='center' height='25'>".$r2['S_Name']."</td>";
            }
            else{
            if($tid2==$uid){
              echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=3&n=5&sem=".$i."&eid=".$sid."'>".$sname."</a></td>";
            }
            else{
            echo " <td align='center' height='25'>".$sname."</td>";
            }
        }
        }
          else {
            echo " <td align='center' height='25'><a href='schedule.php?q=$cid&step=2&n=5&sem=".$i."&eid=".$sid."'>".$row['P5']."</a></td>";
          }
          echo " </tr>";
          $i++;
          $j++;
      }
      echo '</table>';

      echo " </div>";
      echo '<a href="oddschedule.php?q='.$cid.'"><button type="radio" class="button button1" style="text-decoration: none;">odd</button></a>';
    //}
//}
if(@$_get['step']==2){
  $period=@$_GET['n'];
  $sem=@$_GET['sem'];
  $sid=@$_GET['eid'];
  $cidm=@$_GET['q'];
    ?>
  <div class="form-container">
  
  <form action="" method="post">
     <h3>Add Class Schedule</h3>
     <?php
     if(isset($error)){
        foreach($error as $error){
           echo '<span class="error-msg">'.$error.'</span>';
        };
     };
     ?>
     <?php
     $query=mysqli_query($conn,"select * from subject where Course_Id=$cidm and Sem_No=$sem");
     ?>
     <select name="sname" id="block_">
        <option value="">Select a Subject</option>
           <?php
           while($row=mysqli_fetch_array($query)){
              echo "<option value='$row[Subject_Id]'>".$row['S_Name']."</option>";
           }
           ?>   
        </select>
        <?php 
        echo '
        <input type="hidden" name="period" value="'.$period.'">
        <input type="hidden" name="sem" value="'.$sem.'">
        <input type="hidden" name="schedule" value="'.$sid.'">
        <input type="hidden" name="cid" value="'.$cidm.'" >' ;
        ?>
     <input type="submit" name="submit" value="Submit" class="form-btn">
     <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
  </form>
  </div>
    <?php
  }
  if(@$_GET['step']==3){
    $period=@$_GET['n'];
  $sem=@$_GET['sem'];
  $sid=@$_GET['eid'];
  $cidm=@$_GET['q'];
  $date=date("Y/m/d");
  $sql="INSERT into reallocate(Schedule_Id,Date,tid1,period)values($sid,'$date',$uid,$period)";
  $data=mysqli_query($conn,$sql);

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
<?php
if(isset($_POST['submit'])){
  $sub=$_POST['sname'];
  $period=$_POST['period'];
  $sem=$_POST['sem'];
  $sid=$_POST['schedule'];
  $cid=$_POST['cid'];
  
  if($period==1){
    $sql="UPDATE schedule set P1='$sub' where Schedule_Id='$sid'";
    $data=mysqli_query($conn,$sql);
    header("location:../schedule.php?q=$cid");
  }
  if($period==2){
    $sql="UPDATE schedule set P2='$sub' where Schedule_Id='$sid'";
    $data=mysqli_query($conn,$sql);
    header("location:../schedule.php?q=$cid");
  }
  if($period==3){
    $sql="UPDATE schedule set P3='$sub' where Schedule_Id='$sid'";
    $data=mysqli_query($conn,$sql);
    header("location:../schedule.php?q=$cid");
  }
  if($period==4){
    $sql="UPDATE schedule set P4='$sub' where Schedule_Id='$sid'";
    $data=mysqli_query($conn,$sql);
    header("location:../schedule.php?q=$cid");
  }
  if($period==5){
    $sql="UPDATE schedule set P5='$sub' where Schedule_Id='$sid'";
    $data=mysqli_query($conn,$sql);
    header("location:../schedule.php?q=$cid");
  }
}
?>