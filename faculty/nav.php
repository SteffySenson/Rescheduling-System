<html>
<head>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
}
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
</style>
</head>
<body style="background-color: #fcfaf2;">

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="home.php">Class Schedule</a></li>
  <li><a href="announcement/announcementadd.php">Announcement</a></li>
  <li><a href="progress.php">Progress</a></li>
  <li><a href="allocation.php">allocation request</a></li>
  <li style="float:right"><a href="../login/logout.php">Logout</a></li>
  <li style="float:right"><a  href="profile.php">Profile</a></li>
</ul>
</body>
</html>