<?php
$conn = new mysqli("localhost", "root", "", "registration_db");

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = $id";

if ($conn->query($sql)) {
  header("Location: view.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
