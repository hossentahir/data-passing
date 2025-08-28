<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "simpledb");

// Form data নেওয়া
$username = $_POST['username'];
$email = $_POST['email'];

// Database এ save করা
$sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
$conn->query($sql);

// সব data দেখানো
$result = $conn->query("SELECT * FROM users");

echo "<h2>Saved Users</h2>";
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Name: " . $row['username'] . " | Email: " . $row['email'] . "<br>";
    
}

$conn->close();
?>
