<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "codewith";

$conn = new mysqli($server, $user, $pass, $db);

if(!$conn){
  die();
}

$sql = "INSERT into users(username, email, password) values 
        ('Peace','peace@gmail.com','" . md5("peace") . "')";
$result = $conn->query($sql);

if($result){
  echo "Data uploaded";
}else{
  echo "mbola maguy";
}
