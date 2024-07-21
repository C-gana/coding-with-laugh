<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <?php
  require ("conn.php");
  session_start();

  if(isset($_POST['username'])){
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['pwd']);
    $sql = "SELECT * FROM users WHERE username ='$username' AND password = '".md5($password)."' ";
    $user = $conn->query($sql)->fetch_assoc();
    if($user){
      $_SESSION['username'] = $user['username'];
      header("Location:home.php");
    }else{
      header("Location:login.php?error=Incorrect username or password");
    }
  }
  ?>
  <div class="container">
    <div class="thumbnail">
    </div>
    <form method="post" class="card">
      <h3>LOGIN</h3>
      <div class="error"><?php if(isset($_GET['error'])) echo $_GET['error']?></div>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="submit"  value="Login">
      <div>Dont have account? <a href="signup.php">Sign Up</a></div>
    </form>
  </div>
</body>
</html>