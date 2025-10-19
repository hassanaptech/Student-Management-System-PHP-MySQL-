<?php
include 'connect.php';
$db_result = mysqli_query($db_conn, "SELECT * FROM db_students");
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management System</h2>
<div style="text-align:center;">
  <a href="add.php" class="btn">+ Add New Student</a>
</div>

<table>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Roll No</th>
  <th>Department</th>
  <th>Year</th>
  <th>Address</th>
  <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($db_result)) { ?>
<tr>
  <td><?php echo $row['db_id']; ?></td>
  <td><?php echo $row['db_name']; ?></td>
  <td><?php echo $row['db_roll_no']; ?></td>
  <td><?php echo $row['db_department']; ?></td>
  <td><?php echo $row['db_year']; ?></td>
  <td><?php echo $row['db_address']; ?></td>
  <td>
    <a href="view.php?id=<?php echo $row['db_id']; ?>">View</a> |
    <a href="edit.php?id=<?php echo $row['db_id']; ?>">Edit</a> |
    <a href="delete.php?id=<?php echo $row['db_id']; ?>">Delete</a>
  </td>
</tr>
<?php } ?>
</table>

</body>
</html>
