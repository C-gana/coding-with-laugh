<?php
require ("conn.php");
$user_id = $_GET['user_id'];
$sql = "SELECT * from users where user_id = $user_id";
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
  <h2>User ID: <?php echo $user_id?></h2>
  <form action="index.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user_id;?>">
    <p><strong>User Name:</strong> <?php echo $user['username']?></p>
    <p><strong>User Email:</strong> <?php echo $user['email']?></p>
    <p><strong>User Password:</strong> <?php echo $user['password']?></p>
    <h2 style="color:red;">Do you want to delete the user details above?</h2>
    <input style="background-color: red;color:white;padding:5px;" type="submit" name="deleteData" value="Delete">
  </form>
</body>
</html>
