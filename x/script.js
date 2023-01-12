function searchMarks() {
  var studentID = document.getElementById("studentID").value;
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "getMarks.php?studentID=" + studentID, true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("marks").innerHTML = xhr.responseText;
    }
  };
  xhr.send();
}