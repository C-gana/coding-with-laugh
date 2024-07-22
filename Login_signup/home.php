<?php
require ("auth.php");
echo "LOGIN SUCCESSFUL<br>Welcome, $_SESSION[username]";?>
<!DOCTYPE html>
<html lang="en">
<head><style>
  body{
    background:url(images/home.jpg);
    background-size: cover;
    background-attachment: fixed;
  }
  button{
    background-color: darkorange;
    border: none;
    padding:10px 15px;
  }
  a{
    text-decoration: none;
    color: white;
  }
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
</head>
<body>
    <button name="logout"><a href="logout.php">Logout</a></button>
</body>
</html>
