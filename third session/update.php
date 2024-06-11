<?php
require ("conn.php");
$user_id = $_GET['user_id'];
$sql = "SELECT * from users Where user_id = $user_id";
$user = $conn->query($sql)->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Updating userdata</title>
</head>
<body><h2>User ID: <?php echo $user_id?></h2>
  <form action="index.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user_id;?>">
    <input type="text" name="username" value="<?php echo $user['username'];?>" placeholder="Username" required><br>
    <input type="email" name="email" value="<?php echo $user['email'];?>" placeholder="Email"required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="updateData" value="Update">
  </form>

</body>
</html>