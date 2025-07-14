<?php
$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$college = $_POST['college'];
$graduation = $_POST['graduation'];

$sql = "INSERT INTO students (full_name, dob, gender, degree, college, graduation)
        VALUES ('$full_name', '$dob', '$gender', '$degree', '$college', '$graduation')";

if ($conn->query($sql)) {
  echo "Student registered successfully. <a href='view.php'>View Records</a>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
