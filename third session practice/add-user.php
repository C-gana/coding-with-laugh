<?php
require ("connection.php");
$sql = "SELECT * from users";
$users = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adding users</title>
</head>
<body>
  <input type="text" name="username" placeholder="Username"><br>
  <input type="email" name="email" placeholder="Email"><br>
  <input type="text" name="department" placeholder="Department"><br>
  <input type="submit" value="Add User"><br><hr>
  <table>
    <thead>
      <th>No.</th>
      <th>Username</th>
      <th>Email</th>
      <th>Department</th>
    </thead>
    <tbody>
      <?php foreach($users as $user):?>
        <tr>
          <td><?php echo $user['username']?></td>
          <td><?php echo $user['email']?></td>
          <td><?php echo $user['department']?></td>
        </tr>
        <?php endforeach?>
    </tbody>
  </table>
</body>
</html>