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
        VALUES ('Magaleta','magaleta@gmail.com','".md5("magaleta")."')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Record(s) inserted successfully";
}else{
  echo "operation failed";
}

# Displaying the users table from the DB
$sql = "SELECT * from `users`";
$result = mysqli_query($conn, $sql);

foreach($result as $row){
  echo $row['username'] . " " . md5($row['password']) . "<br>";
}