<?php
require ("conn.php");
$sql = "";
if(isset($_POST['submitted'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
}