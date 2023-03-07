<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $dname = mysqli_real_escape_string($conn, $_POST['dname']);
   $cname =$_POST['cname'];
   $scode = mysqli_real_escape_string($conn, $_POST['scode']);
   $sname = mysqli_real_escape_string($conn, $_POST['sname']);
   $sem = mysqli_real_escape_string($conn, $_POST['sem']);
   $tname = $_POST['tname'];
   $select = " SELECT * FROM subject WHERE S_Name = '$sname' and Course_Id = '$cname' and Sem_No = '$sem' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'subject already exist!';

   }else{
         $insert = "INSERT INTO subject(sub_code,S_Name,Course_Id, Sem_No,Teacher_Id) VALUES('$scode','$sname','$cname','$sem','$tname')";
         $res=mysqli_query($conn, $insert);
         if($res)
         {
            $error[] = 'subject added succesfully';
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
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Add Subject</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      $query=mysqli_query($conn,"select * from department");
      ?>
      <select name="dname" id="department_">
      <option value="">Select a Department</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[Department_Id]'>".$row['D_Name']."</option>";
         }
         ?>
      </select>
      <select name="cname" id="course_" onchange="semester(this.value)">
         <option value="">Select  a Course</option>
      </select>
      <select name="sem" id="semester_">
      <option value="">Select a Semester</option>
      <option value=1>1</option> 
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      </select>
      <input type="text" name="scode" required placeholder="Enter the subject Code">
      <input type="text" name="sname" required placeholder="Enter the subject name">
      <select name="tname" id="teacher_">
         <option value="">Select  a Teacher</option>
         
      </select>
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
   $("#department_").change(function(){
      var aid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {aid:aid},
         success:function(data){
            $("#course_").html(data);
         }
      });
      });
   });
   $(document).ready(function(){
   $("#department_").change(function(){
      var vaid= $(this).val();
      $.ajax({
         url:'floor.php',
         method:'POST',
         data: {vaid:vaid},
         success:function(data){
            $("#teacher_").html(data);
         }
      });
      });
   });


   /*$(document).ready(function(){
   $("#course_").change(function(){
      var said= $('#department_').val();
      var vaid= $(this).val();
      $.ajax({
         url:'floor2.php',
         method:'POST',
         data: {said:said,vaid:vaid},
         success:function(data){
            $("#semester_").html(data);
         }
      });
      });
   });
   function semester(str) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("course_").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","floor2.php?q="+str,true);
      xmlhttp.send();
  }
  */
</script>
</body>
</html>