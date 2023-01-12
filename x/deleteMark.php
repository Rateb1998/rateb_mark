<?php
$studentID = $_POST["studentID"];
$course = $_POST["course"];
$mark = $_POST["mark"];

$conn = new mysqli("127.0.0.1","wesam","wesam","wesam");

$sql = "DELETE FROM marks WHERE studentID = '$studentID' AND course = '$course' and mark = '$mark'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();
?>
