<?php
$studentID = $_GET["studentID"];
$conn = new mysqli("127.0.0.1","wesam","wesam","wesam");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM marks WHERE studentID = '$studentID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Course: " . $row["course"]. " - Mark: " . $row["mark"]. "<br>";
  }
} else {
  echo "No marks found for student ID " . $studentID;
}
$conn->close();
?>



