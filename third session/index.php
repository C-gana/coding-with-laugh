<?php
require ("conn.php");

if(isset($_POST['submitted'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT into users(username,email,password) 
          values ('$username','$email','".md5($password)."')";
  $response = $conn -> query($sql);
  if($response){
    header('Location:form.php');
  }else{
    echo "Error occured!!!";
  }
}
if(isset($_POST['updateData'])){
  $username = $_POST['username'];
  $user_id = $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $update_sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' 
                Where user_id = '$user_id'";
$response = $conn->query($update_sql);
  if($response){
    header('Location:form.php');
  }else{
    echo "Update failed";
  }
}