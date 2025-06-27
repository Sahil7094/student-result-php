<?php include 'db.php'; ?> 
<!DOCTYPE html> 
<html> 
<head> 
  <title>Admin - Add Result</title> 
  <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
  <h2>Add Student Result</h2> 
  <form method="post"> 
    Name: <input type="text" name="name" required><br> 
    Roll No: <input type="text" name="roll" required><br> 
    Marks: <input type="number" name="marks" required><br> 
    <input type="submit" value="Submit"> 
  </form> 
 
  <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      $name = $_POST['name']; 
      $roll = $_POST['roll']; 
      $marks = $_POST['marks']; 
 
      $sql = "INSERT INTO results (name, roll_no, marks) VALUES ('$name', '$roll', '$marks')"; 
      if ($conn->query($sql)) { 
          echo "<p class='result-box'>Result added successfully!</p>"; 
      } else { 
          echo "<p class='result-box'>Error: " . $conn->error . "</p>"; 
      } 
  } 
  ?> 
</body> 
</html> 
