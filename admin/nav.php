<?php
@include 'config.php';
?>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
li a h3 {
  color: darkorange;
}
</style>
</head>
<body style="background-color: #fcfaf2;">

<ul>
  <li><a><h3>Admin Dashboard</h3></a></li>
  <li style="float:right"><a href="../login/logout.php">Logout</a></li>
  <li style="float:right"><a><h3>Welcome, <?php echo $_SESSION['admin_name'] ?></h3></a></li>
</ul>
</body>
</html>