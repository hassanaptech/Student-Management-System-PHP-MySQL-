<?php
include 'connect.php';
$id = $_GET['id'];
mysqli_query($db_conn, "DELETE FROM db_students WHERE db_id=$id");
header("Location: index.php");
?>
