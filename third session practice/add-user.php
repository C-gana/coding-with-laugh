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
  <p>Please enter the correct details to add a user</p>
  <form action="index.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="department" placeholder="Department"><br>
    <input type="submit" name="addUser" value="Add User"><br><hr>
  </form>
  <table>
    <thead>
      <th>No.</th>
      <th>Username</th>
      <th>Email</th>
      <th>Department</th>
      <th>Actions</th>
    </thead>
    <tbody>
      <?php $i=1; foreach($users as $user):?>
        <tr>
          <td><?php echo $i;
          $i++;?></td>
          <td><?php echo $user['username']?></td>
          <td><?php echo $user['email']?></td>
          <td><?php echo $user['department']?></td>
          <td><a href="update-user.php?id=<?php echo $user['id']?>"><button>Edit</button></a>
              <a href="deletete-user.php?id=<?php echo $user['id']?>"><button>Delete</button></a>
          </td>
        </tr>
        <?php endforeach?>
    </tbody>
  </table>
</body>
</html>