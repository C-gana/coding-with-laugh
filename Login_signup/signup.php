<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/signup.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="thumbnail">
    </div>
    <form method="post" class="card js-sign-form">
      <h3>SIGN UP</h3>
      <div>
        <input type="text" class="js-username" name="username" placeholder="Username">
        <small></small>
      </div>
      
      <input type="email" class="js-email" name="email" placeholder="Email">
      <input type="password" class="js-pwd" name="pwd" placeholder="Password">
      <input type="password" class="js-cpwd" name="pwd" placeholder="Confirm Password">
      <input type="submit" class="js-sign-btn" value="Sign up">
      By clicking sign up you agree to our <br><a href="">Terms and conditions</a> .
      <div>Already have account? <a href="login.php">Login</a></div>
    </form>
  </div>
  <script src="scripts/validate.js"></script>
</body>
</html>