<?php
include "./dbconnection.php";
// Retrieve the content from the request
$content = $_POST['content'];

// Prepare and execute the SQL query to insert the data
$sql = "INSERT INTO tasks (editor_content) VALUES ('$content')";

if ($conn->query($sql) === TRUE) {
  header("Location:../dashboard.php");
} else {
  echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>