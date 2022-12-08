<?php

@include 'config.php';

$rn=$_GET['rn'];
$rr=$_GET['rr'];
$cn=$_GET['cn'];
$row_=$_GET['row'];

if(isset($_POST['submit'])){
   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $rname = mysqli_real_escape_string($conn, $_POST['rname']);
   $rows = mysqli_real_escape_string($conn, $_POST['rows']);
 
   $select = " SELECT * FROM subject_ WHERE subject_code = '$rname' and department_id = '$bname' and semester_no = '$fname' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
        $insert = " update subject_ set department_id = '$bname', semester_no = '$fname', subject_code = '$rname', subject_name ='$rows' WHERE subject_code = '$rname' and department_id = '$bname' and semester_no = '$fname' ";
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
   background: darkorange;
}
</style>
</head>
<body>
<div class="form-container">
   <form action="" method="post">
      <h3>Update Room</h3>
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
            echo "<option value='$row[department_id]'>".$row['department_name']."</option>";
         }
         ?>
         
      </select>

      <?php
      $query=mysqli_query($conn,"select * from semester_");
      ?>
      <select name="fname" id="floor_">
      <option value="<?php echo "$cn" ?>"><?php echo "$cn" ?></option>  
      </select>


      <input type="text" name="rname" value="<?php echo "$rr" ?>">
      <input type="text" name="rows" value="<?php echo "$row_" ?>">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='viewsubject.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
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