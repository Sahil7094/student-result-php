<?php include 'db.php'; ?> 
<!DOCTYPE html> 
<html> 
<head> 
  <title>Check Student Result</title> 
  <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
  <h2>Check Result</h2> 
  <form method="post"> 
    Roll No: <input type="text" name="roll" required> 
    <input type="submit" value="Search"> 
  </form> 
 
  <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      $roll = $_POST['roll']; 
      $sql = "SELECT * FROM results WHERE roll_no = '$roll'"; 
      $result = $conn->query($sql); 
 
      if ($result->num_rows > 0) { 
          $row = $result->fetch_assoc(); 
          echo "<div class='result-box'>"; 
          echo "<strong>Name:</strong> " . $row['name'] . "<br>"; 
          echo "<strong>Marks:</strong> " . $row['marks']; 
          echo "</div>"; 
      } else { 
          echo "<p class='result-box'>No result found for Roll No: $roll</p>"; 
      } 
  } 
  ?> 
</body> 
</html>
