<?php

@include 'config.php';

$rn=$_GET['rn'];
$fn=$_GET['fn'];
$cn=$_GET['cn'];

if(isset($_POST['submit'])){
   $bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $desc = mysqli_real_escape_string($conn, $_POST['desc']);
 
    $select = " SELECT * FROM floor_ WHERE block_id = '$bname' and floor_name = '$fname' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
        $insert = " update floor_ set block_id = '$bname', floor_name = '$fname', floor_desc = '$desc' WHERE block_id = '$bname' && floor_name = '$fname' ";
        $res=mysqli_query($conn, $insert);
        if($res)
          {
             $error[] = 'floor updated succesfully';
          }
 
    }else{
             $error[] = 'floor name not match';
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
      <h3>Update Block</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <?php
      $query=mysqli_query($conn,"select * from block_");
      ?>
      <select name="bname">
      <option value="<?php echo "$rn" ?>"><?php echo "$rn" ?></option>
         <?php
         while($row=mysqli_fetch_array($query)){
            echo "<option value='$row[block_name]'>".$row['block_name']."</option>";
         }
         ?>
         
      </select>
      <input type="text" name="fname" value="<?php echo "$cn" ?>">
      <input type="textbox" rows="3" name="desc" value="<?php echo "$fn" ?>">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <a href='viewfloor.php'><input type="button" name="goback" value="Go back" class="form-btn"></a>
   </form>



</div>



</body>
</html>