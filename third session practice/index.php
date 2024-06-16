<?php
require ("connection.php");

if(isset($_POST['addUser'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $sql = "INSERT into users (username,email,department)
          VALUES ('$username','$email','$department')";
  $response = $conn->query($sql);
  if($response){
    header("Location:add-user.php");
  }else{
    echo "OOPS user not added";
  }
}