<?php
@include 'config.php';
error_reporting(0);
$q = intval($_GET['q']);
echo "<option value=''>Select a Semester</option>";
$sql2="SELECT * FROM course WHERE Course_Id = '".$q."'";
$result2 = mysqli_query($dbcon,$sql2);
                               echo "<option value=''>Select a Semester</option>"; 
                            $row=mysqli_fetch_array($result2)
                            $sem=$row['Semester'];
                            $i=1;
                            while($i<=$sem)
                            {
                                
                                echo "<option value=".$i.">".$i."</option>";
                            }
                            ?>
</select>


</body>
</html>
?>