<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sigana';
$conn = new mysqli($host, $user, $pwd, $db);

if($conn->connect_errno){
  echo "Failed to connect to MySql: ".$conn->connect_error;
}