<?php
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($db_conn, "SELECT * FROM db_students WHERE db_id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Details</h2>

<form>
  <p><b>Name:</b> <?php echo $row['db_name']; ?></p>
  <p><b>Roll No:</b> <?php echo $row['db_roll_no']; ?></p>
  <p><b>Department:</b> <?php echo $row['db_department']; ?></p>
  <p><b>Year:</b> <?php echo $row['db_year']; ?></p>
  <p><b>Address:</b> <?php echo $row['db_address']; ?></p>
</form>

<a href="index.php" class="back-link">← Back to List</a>
</body>
</html>
