<?php
$conn = new mysqli("localhost", "root", "", "registration_db");
$result = $conn->query("SELECT * FROM students");
?>
<h2>Registered Students</h2>
<table border="1" cellpadding="10">
  <tr>    
    <th>ID</th><th>Full Name</th><th>DOB</th><th>Gender</th>
    <th>Degree</th><th>College</th><th>Graduation</th><th>Action</th>
  </tr>

  <?php while ($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['full_name'] ?></td>
    <td><?= $row['dob'] ?></td>
    <td><?= $row['gender'] ?></td>
    <td><?= $row['degree'] ?></td>
    <td><?= $row['college'] ?></td>
    <td><?= $row['graduation'] ?></td>
    <td>
      <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
      <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
  </tr>
  <?php } ?>
</table>
