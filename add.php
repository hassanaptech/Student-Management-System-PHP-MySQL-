<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $db_name = $_POST['db_name'];
  $db_roll = $_POST['db_roll_no'];
  $db_dept = $_POST['db_department'];
  $db_year = $_POST['db_year'];
  $db_addr = $_POST['db_address'];

  $query = "INSERT INTO db_students(db_name, db_roll_no, db_department, db_year, db_address)
            VALUES('$db_name','$db_roll','$db_dept','$db_year','$db_addr')";
  mysqli_query($db_conn, $query);
  echo "<script>alert('Student Added Successfully!');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Student</h2>
<form method="post">
  <label>Name:</label>
  <input type="text" name="db_name" required>

  <label>Roll No:</label>
  <input type="text" name="db_roll_no" required>

  <label>Department:</label>
  <input type="text" name="db_department" required>

  <label>Year:</label>
  <input type="number" name="db_year" required>

  <label>Address:</label>
  <input type="text" name="db_address" required>

  <input type="submit" name="submit" value="Add Student">
</form>

<a href="index.php" class="back-link">← Back to List</a>
</body>
</html>
