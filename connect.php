<?php
$db_conn = mysqli_connect("localhost", "root", "", "db_sms");

if(!$db_conn){
  die("Database connection failed: " . mysqli_connect_error());
}
?>
