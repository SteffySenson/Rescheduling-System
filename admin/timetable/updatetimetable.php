<?php

@include 'config.php';

$rn=$_GET['rn'];
$rr=$_GET['rr'];
$cn=$_GET['cn'];
$row_=$_GET['row'];
$date=$_GET['date'];
$time=$_GET['time'];

if(isset($_POST['submit'])){
   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fubname = mysqli_real_escape_string($conn, $_POST['fubname']);
   $sname = mysqli_real_escape_string($conn, $_POST['sname']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);

 
   $select = " SELECT * FROM timetable_ WHERE subject_code = '$fubname' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
        $insert = " update timetable_ set date_ = '$date', time_ = '$sname' WHERE subject_code = '$fubname'";
        $res=mysqli_query($conn, $insert);
        if($res)
          {
             $error[] = 'subject updated succesfully';
          }
 
    }else{
             $error[] = 'Subject name not match';
       }
    }
 



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
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
<div class="form-container">

   <form action="" method="post">
      <h3>Update Timetable</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      $query=mysqli_query($conn,"select * from department_");
      ?>
      <select name="bname" id="block_">
      <option value="<?php echo "$rn" ?>"><?php echo "$rn" ?></option>
         <?php
         while($row=mysqli_fetch_array($query)){
            //echo "<option value='$row[department_id]'>".$row['department_name']."</option>";
         }
         ?>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from semester_");
      ?>
      <select name="fname" id="floor_">
      <option value="<?php echo "$cn" ?>"><?php echo "$cn" ?></option>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from subject_");
      ?>
      <select name="fubname" id="subject_">
      <option value="<?php echo "$rr" ?>"><?php echo "$row_" ?></option>
         
      </select>

      
      <input type="date" name="date" value="<?php echo "$date" ?>">
      <select name="sname">
         <option value="<?php echo "$time" ?>"><?php echo "$time" ?></option>
         <option value="Forenoon">Forenoon</option>
         <option value="Afternoon">Afternoon</option>
      </select>
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='viewtimetable.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#block_").change(function(){
      var aid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {aid:aid},
         success:function(data){
            $("#floor_").html(data);
         }
      });
      });
   });
</script>


</body>
</html>