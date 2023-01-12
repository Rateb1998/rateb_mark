<?php
  $conn = mysqli_connect("127.0.0.1","wesam","wesam","wesam");
  $sql = "DELETE FROM marks";
  if (mysqli_query($conn, $sql)) {
    echo "All records deleted successfully";
  } else {
    echo "Error deleting records: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
