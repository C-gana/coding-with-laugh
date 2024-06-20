<?php
require ("connection.php");
$user_id = $_GET['id'];
$sql = "SELECT * from users where id = $user_id";
$user = $conn->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deleting a user</title>
</head>
<body>
  <h1 style="color:red;">Delete the user below?</h1>
  <h2>User ID: <?php echo $user_id?></h2>
  <h2>Username: <?php echo $user['username']?></h2>
  <h2>Email: <?php echo $user['email']?></h2>
  <h2>Department: <?php echo $user['department']?></h2>
  <form action="index.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user_id?>">
    <input type="submit" value="Delete User" name="deleteUser">
  </form>
</body>
</html>