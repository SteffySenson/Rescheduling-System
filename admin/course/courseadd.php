<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $sem = mysqli_real_escape_string($conn, $_POST['sem']);
   $dname = mysqli_real_escape_string($conn, $_POST['dname']);
   $select = " SELECT * FROM course WHERE C_Name = '$name' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'course already exist!';

   }else{
         $insert = "INSERT INTO course( C_Name,Department_Id,Semesters) VALUES('$name','$dname','$sem')";
         $res=mysqli_query($conn, $insert);
         $select = " SELECT * FROM course WHERE C_Name = '$name' ";
         $result = mysqli_query($conn, $select);
         $row=mysqli_fetch_array($result);
         $cid=$row['Course_Id'];
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,1,'MONDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,1,'TUESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,1,'WEDNESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,1,'THURSDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,1,'FRIDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,2,'MONDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,2,'TUESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,2,'WEDNESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,2,'THURSDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,2,'FRIDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,3,'MONDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,3,'TUESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,3,'WEDNESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,3,'THURSDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,3,'FRIDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,4,'MONDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,4,'TUESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,4,'WEDNESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,4,'THURSDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,4,'FRIDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,5,'MONDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,5,'TUESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,5,'WEDNESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,5,'THURSDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,5,'FRIDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,6,'MONDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,6,'TUESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,6,'WEDNESDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,6,'THURSDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         $sql="INSERT into schedule(Course_Id,Semester,Day,P1,P2,P3,P4,P5)values($cid,6,'FRIDAY','-','-','-','-','-')";
         $data=mysqli_query($conn,$sql);
         if($res)
         {
            $error[] = 'course added succesfully';
         }
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
      .btn{
   /*font-size: 10px;*/
   color:black;
}

.btn:hover{
   color: darkorange;
}
</style>
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Add Course</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter the Course name:">
      <input type="text"  name="sem" required placeholder="Enter No. of Semesters:">
      <?php
      $query=mysqli_query($conn,"select * from department_");
      ?>
      <select name="dname">
         <option value="">Select a Department</option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[Department_Id]'>".$row['D_Name']."</option>";
         }
         ?>
      </select>
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='../admin_page.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>



</div>




</body>
</html>