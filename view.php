<?php
$conn = new mysqli("localhost", "root", "", "simpledb");

$result = $conn->query("SELECT * FROM users");

echo "<h2>All Users</h2>";
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Name: " . $row['username'] . " | Email: " . $row['email'] . "<br>";
}

$conn->close();
?>
