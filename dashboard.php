<?php
session_start();

if (!isset($_SESSION["loggedIn"])) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet" href="dashboard.css">
</head>
<body>
<h1>Welcome to Vidushi's Creation for Rich Panel</h1>
<h3>So let's get sarted and and move ahead with us on Rich Panel!!  :)</h3>
<img src="image.png" alt="Image" width="170">
  <div class="center-box">
    
    <button onclick="window.location.href='logout.php'">Logout</button>
    <p>Want to explore plans provided by us <button onclick="window.location.href='month.htm'">Click Here!</button>
	   <br>Want to know about your plan <button onclick="window.location.href='activeplan.htm'">Click Here!</button></p>
  </div>
  
</body>
</html>