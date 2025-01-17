<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: scr_100/login/login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="w3-container">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["last_name"]); ?></b></h1>
    <h1>Welcome to our site ^^</h1>
  </div>
  <p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
  </p>
</body>

</html>