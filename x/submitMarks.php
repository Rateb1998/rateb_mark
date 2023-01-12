<?php
$studentID = $_POST["studentID"];
$course = $_POST["course"];
$mark = $_POST["mark"];
$conn = new mysqli("127.0.0.1","wesam","wesam","wesam");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO marks (studentID, course, mark)
VALUES ('$studentID', '$course', '$mark')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>refreshPage();</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
