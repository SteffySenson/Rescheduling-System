<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile</h2>

<div class="card">
  <img src="profile.jpg" alt="name" style="width:50%; height:50%;">
  <a href="editprofile.php" style="text-decoration: none"><img src="edit.jpg" alt="John" style="width:5%"></a>
  <h1>Name</h1>
  <p class="title">Designation</p>
  <p>University</p>
  <div style="margin: 24px 0;"> 
    <p>ID</p>
    <p> more info</p>
  </div>
  <p><button>Contact</button></p>
</div>

</body>
</html>
