function addMark() {
    var studentID = document.getElementById("studentID").value;
    var course = document.getElementById("course").value;
    var mark = document.getElementById("mark").value;
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "submitMarks.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        window.location.reload();
      }
    };
    xhr.send("studentID=" + studentID + "&course=" + course + "&mark=" + mark);
    alert('This Text Inserted with JS');
  }