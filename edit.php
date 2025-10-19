<?php
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($db_conn, "SELECT * FROM db_students WHERE db_id=$id");
$data = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
  $db_name = $_POST['db_name'];
  $db_roll = $_POST['db_roll_no'];
  $db_dept = $_POST['db_department'];
  $db_year = $_POST['db_year'];
  $db_addr = $_POST['db_address'];

  $update = "UPDATE db_students 
             SET db_name='$db_name', db_roll_no='$db_roll', db_department='$db_dept',
                 db_year='$db_year', db_address='$db_addr'
             WHERE db_id=$id";
  mysqli_query($db_conn, $update);
  echo "<script>alert('Student Updated Successfully!');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Student</h2>
<form method="post">
  <label>Name:</label>
  <input type="text" name="db_name" value="<?php echo $data['db_name']; ?>" required>

  <label>Roll No:</label>
  <input type="text" name="db_roll_no" value="<?php echo $data['db_roll_no']; ?>" required>

  <label>Department:</label>
  <input type="text" name="db_department" value="<?php echo $data['db_department']; ?>" required>

  <label>Year:</label>
  <input type="number" name="db_year" value="<?php echo $data['db_year']; ?>" required>

  <label>Address:</label>
  <input type="text" name="db_address" value="<?php echo $data['db_address']; ?>" required>

  <input type="submit" name="update" value="Update Student">
</form>

<a href="index.php" class="back-link">← Back to List</a>
</body>
</html>
