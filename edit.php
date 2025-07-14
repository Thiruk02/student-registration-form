<?php
$conn = new mysqli("localhost", "root", "", "registration_db");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Edit Student</h2>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <div class="mb-3">
      <label>Full Name</label>
      <input type="text" name="full_name" class="form-control" value="<?= $row['full_name'] ?>" required>
    </div>

    <div class="mb-3">
      <label>Date of Birth</label>
      <input type="date" name="dob" class="form-control" value="<?= $row['dob'] ?>" required>
    </div>

    <div class="mb-3">
      <label>Gender</label>
      <select name="gender" class="form-select" required>
        <option value="Male" <?= $row['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
        <option value="Female" <?= $row['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        <option value="Other" <?= $row['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
      </select>
    </div>

    <div class="mb-3">
      <label>Degree</label>
      <input type="text" name="degree" class="form-control" value="<?= $row['degree'] ?>" required>
    </div>

    <div class="mb-3">
      <label>College</label>
      <input type="text" name="college" class="form-control" value="<?= $row['college'] ?>" required>
    </div>

    <div class="mb-3">
      <label>Graduation Date</label>
      <input type="date" name="graduation" class="form-control" value="<?= $row['graduation'] ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="view.php" class="btn btn-secondary">Cancel</a>
  </form>
</body>
</html>
