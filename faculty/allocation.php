<html>
    <head>
</head>
<body>
<?php
include("nav.php");
?>
<?php
session_start();
@include 'config.php';
$uid=$_SESSION['faculty_id'];
$sel="SELECT * from users where User_Id=$uid";
      $man=mysqli_query($conn,$sel);
      $rows=mysqli_fetch_array($man);
      $did=$rows['Department_Id'];
      $dat=date("Y/m/d");
echo '<table>
<tr>
<th>Course</th><th>Period</th><th></th></tr>';
$sql="select * from reallocate where Date='$dat' and tid2=0";
$data=mysqli_query($conn,$sql);
if(mysqli_num_rows($data)>0){
    
while($row=mysqli_fetch_array($data)){
$sid=$row['Schedule_Id'];
$p=$row['period'];
$id=$row['id'];
$s="select * from schedule where Schedule_Id=$sid";
$d=mysqli_query($conn,$s);
$r=mysqli_fetch_array($d);
$cid=$r['Course_Id'];
//echo '<script>alert("'.$sid.'");</script>';
$sem=$r['Semester'];
$s="select * from course where Course_Id=$cid";
$d=mysqli_query($conn,$s);
$r=mysqli_fetch_array($d);
$cname=$r['C_Name'];

echo '<tr>
<th>'.$cname.'</th><th>'.$p.'</th><th><a href="?q=2&sem='.$sem.'&id='.$id.'">accept</a></th>
</tr>';


}
}
echo '</table>';
if(@$_GET['q']==2){
    $sem=@$_GET['sem'];
    $id=@$_GET['id'];
   
    $sql="select * from subject where Sem_No=2 and Teacher_Id=$uid ";
    $data=mysqli_query($conn,$sql);
    if(mysqli_num_rows($data)>0){
         echo '<script>alert("'.$uid.'");</script>';
        $row=mysqli_fetch_array($data);
        $na=$row['Subject_Id'];
            $sql="update reallocate set tid2=$uid,sub=$na where id=$id";
            $dta=mysqli_query($conn,$sql);
    }
}
?>

</body>
    </html>