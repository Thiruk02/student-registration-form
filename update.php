<?php
$conn = new mysqli("localhost", "root", "", "registration_db");

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$college = $_POST['college'];
$graduation = $_POST['graduation'];

$sql = "UPDATE students SET
  full_name='$full_name',
  dob='$dob',
  gender='$gender',
  degree='$degree',
  college='$college',
  graduation='$graduation'
WHERE id=$id";

if ($conn->query($sql)) {
  echo "Student updated successfully. <a href='view.php'>Back to list</a>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
