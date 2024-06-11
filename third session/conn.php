<?php
$conn = new mysqli('localhost', 'root', '', 'codewith');

if($conn->connect_error){
  die ("connection failed".$conn->connect_error);
}