<?php
require ("conn.php");
$sql = "SELECT * from users";
$users = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting userdata</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email"required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="submitted" value="Send">
  </form>
  <table>
    <thead>
      <th>No.</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Actions</th>
    </thead>
    <tbody>
      <?php
      $i =1; foreach($users as $user):
      ?>
      <tr>
        <td><?php echo $i; $i++?></td>
        <td><?php echo $user['username']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['password']?></td>
        <td><a href="update.php?user_id=<?php echo $user['user_id']?>"><button>Edit</button></a>
            <a href="delete.php?user_id=<?php echo $user['user_id']?>"><button>Delete</button></a>
        </td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</body>
</html>