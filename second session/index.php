<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "codewith";

$conn = new mysqli($server,$user,$pass,$db);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySql: " . mysqli_connect_error();
}

$sql = "INSERT into users (username,email,password)
        VALUES ('C-gana','cgana@gmail.com','".md5("cgana")."')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Record(s) inserted successfully";
}else{
  echo "operation failed";
}