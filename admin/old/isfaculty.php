<html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: down;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 10px 6px;
  text-decoration: none;
}

li a:hover {
  background-color: gray;
}

li button:hover {
    background-color: gray;
}
</style>
<body >
    <center>
<table align=center border=1 width=200px bgcolor=gray cellspacing=5>
    <tr>
        <td bgcolor=white>
        <form action="" method="post">
            <h6 align="center">Are you a Faculty?</h6>
            <ul>
                   <li><h6 align="center"><button><a class="active" href="Fregister.php">Yes</a></button></h6></li>
                   <li><h6 align="center"><button ><a class="active" href="register.php">No</a></button></h6></li>
</ul>
        </form>
        </td>
    </tr>
</table>
</center>
</body>
</html>