<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $fubname = mysqli_real_escape_string($conn, $_POST['fubname']);

   $select = " SELECT * FROM timetable_ WHERE subject_code = '$fubname' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'timetable already exist!';

   }else{
         $insert = "INSERT INTO timetable_(subject_code, date_,time_) VALUES('$fubname','$date','$sname')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'timetable added succesfully';
         }
      }
   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="jquery-3.6.0.min.js"></script> 
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">
   <script>
      function course(str) {

if (str == "") {
  //var data="<input type='text id='inp9' placeholder='Enter Department Id..' name='teachdid'></input>";
  //document.getElementById("txtHint").innerHTML = data;
  return;
} else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET","getcourse.php?q="+str,true);
  xmlhttp.send();
  
}
}
function course4(){
          var number=document.getElementById("studcid").value; 
          document.getElementById("inp12").value=number;
      }
   </script>
</head>
<body>
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
      $query=mysqli_query($conn,"select * from department_");
      ?>
<<<<<<< HEAD
      <!--<select name="bname" id="block_" onchange="subject(this.value)">
      <option value="0">Select a Department</option>
=======
      <select name="bname" id="dep_">
      <option value="">Select a Department</option>
>>>>>>> 5356dc2eedd34ce2114b5617c89275335af9bbc6
         <?php
        // while($row=mysqli_fetch_array($query)){
           // echo "<option value='$row[department_id]'>".$row['department_name']."</option>";
         //}
         ?>
         
      </select>-->
            <select name="bname" onchange="course(this.value)" id="iid">
             
                            <?php
                            include("config.php");
                            $sel="select * from institution";
                            $data=mysqli_query($dbcon,$sel);
                            echo "<option value=''>Select an Institution</option>";
                            while($row=mysqli_fetch_array($data))
                            {
                               echo "<option value=".$row['Institution_Id'].">".$row['Institution_Name']."</option>";
                            }
                            ?>
                        </select>
        </div>
        <div class="top2">
            <label for="inp9"><h5>Course Id</h5></label>
            <div id="txtHint"><input type="text" id="inp9" placeholder="Enter Course Id.." name="studcid"></input></div>
            <input type="hidden" id="inp12" name="studcid" >
        </div>
      <?php
      $query=mysqli_query($conn,"select * from semester_");
      ?>
      <select name="fname" id="floor_">
      <option value="">Select a Semester</option>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from subject_ ");
      ?>
      <select name="fubname" id="subject1_">
      <option value="">Select Subject 1</option>
         
      </select>
      <?php
      $query=mysqli_query($conn,"select * from subject_");
      ?>
      <select name="fubname" id="subject2_">
      <option value="">Select Subject 2</option>
         
      </select>
      <?php
      $query=mysqli_query($conn,"select * from subject_");
      ?>
      <select name="fubname" id="subject3_">
      <option value="">Select Subject 3</option>
         
      </select>
      <?php
      $query=mysqli_query($conn,"select * from subject_");
      ?>
      <select name="fubname" id="subject4_">
      <option value="">Select Subject 4</option>
         
      </select>
      <?php
      $query=mysqli_query($conn,"select * from subject_");
      ?>
      <select name="fubname" id="subject5_">
      <option value="">Select Subject 5</option>
         
      </select>

      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
   $("#dep_").change(function(){
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

$(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#dep_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject1_").html(data);
         }
      });
      });
   });
   $(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#dep_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject2_").html(data);
         }
      });
      });
   });
   $(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#dep_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject3_").html(data);
         }
      });
      });
   });
   $(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#dep_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject4_").html(data);
         }
      });
      });
   });
   $(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#dep_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject5_").html(data);
         }
      });
      });
   });
   $(document).ready(function(){
   $("#floor_").change(function(){
      var said= $('#block_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#subject_").html(data);
         }
      });
      });
   });
</script>
</body>
</html>