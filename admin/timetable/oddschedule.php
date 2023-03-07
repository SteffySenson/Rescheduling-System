<html>
    <head>
        <title>
            Class Schedule
        </title>
        <link rel="stylesheet" href="css/style.css">
        <style>
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
            .button {
  font-family: 'Poppins', sans-serif;
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
$cid=@$_GET['q'];
?>
<div>

    <table id="schedule" border="5" cellspacing="0" align="center" font-size="2">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="45"
                width="150">
                <b>DAY</b>
            </td>
            <td align="center" height="45"
                width="100">
                <b>SEM</b>
            </td>
            <td align="center" height="45"
                width="100">
                <b>I</b>
            </td>
            <td align="center" height="45"
                width="100">
                <b>II</b>
            </td>
            <td align="center" height="45"
                width="100">
                <b>III</b>
            </td>
           
            <td align="center" height="45"
                width="100">
                <b>IV<br></b>
            </td>
            <td align="center" height="45"
                width="100">
                <b>V<br></b>
            </td>
        </tr>
        <tr>
            <td align="center" height="25" rowspan=3>
                <b>MONDAY</b></td>
            <td align="center" height="25">S1</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S3</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S5</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
            <td align="center" height="25" rowspan=3>
                <b>TUESDAY</b>
            </td>
            <td align="center" height="25">S1</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S3</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S5</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
            <td align="center" height="25" rowspan=3>
                <b>WEDNESDAY</b>
            </td>
            <td align="center" height="25">S1</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S3</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S5</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
            <td align="center" height="25" rowspan=3>
                <b>THURSDAY</b>
            </td>
            <td align="center" height="25">S1</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S3</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S5</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
            <td align="center" height="25" rowspan=3>
                <b>FRIDAY</b>
            </td>
            <td align="center" height="25">S1</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>  
        <tr>
        <td align="center" height="25">S3</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>
        <tr>
        <td align="center" height="25">S5</td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
            <td align="center" height="25"><a href="reallocation.php">-</a></td>
        </tr>      
    </table>
    <a href="schedule.php?q=<?=$cid?>"><button type="radio" class="button button1" style="text-decoration: none;">even</button></a>
</div>
</body>
</html>
