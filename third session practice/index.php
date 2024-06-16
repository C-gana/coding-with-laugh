<?php
require ("connection.php");

if(isset($_POST['addUser'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $add_sql = "INSERT into users (username,email,department)
          VALUES ('$username','$email','$department')";
  $response = $conn->query($add_sql);
  if($response){
    header("Location:add-user.php");
  }else{
    echo "OOPS user not added";
  }
}
if(isset($_POST['updateUser'])){
  $id = $_POST['id'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $update_sql = "UPDATE users set username='$username', email='$email',department='$department' where id = $id";
  $response = $conn->query($update_sql);
  if($response){
    header("Location:add-user.php");
  }else{
    echo "OOPS user not updated";
  }

}