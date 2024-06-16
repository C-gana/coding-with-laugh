<?php
require ("connection.php");
$user_id = $_GET['id'];
$sql = "SELECT * from users where id =$user_id";
$user = $conn->query($sql)->fetch_assoc();
$username = $user['username'];
$email = $user['email'];
$department = $user['department'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adding users</title>
</head>
<body>
  <p>Editing the user <strong>'<?php echo $username?>'</strong></p>
  <form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user_id?>">
    <input type="text" name="username" value="<?php echo $username?>" placeholder="Username"><br>
    <input type="email" name="email" value="<?php echo $email?>" placeholder="Email"><br>
    <input type="text" name="department" value="<?php echo $department?>" placeholder="Department"><br>
    <input type="submit" name="updateUser" value="Update User"><br><hr>
  </form>
</body>
</html>