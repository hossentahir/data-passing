<!-- <?php
$conn = new mysqli("localhost", "root", "", "simpledb");

$result = $conn->query("SELECT * FROM users");

echo "<h2>All Users</h2>";
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Name: " . $row['username'] . " | Email: " . $row['email'] . "<br>";
}

$conn->close();
?> -->

<?php

$conn = new mysqli("localhost", "root", "", "simpledb");

$result = $conn->query("SELECT * FROM users");

echo "<h2>All Users</h2>";
echo '<a href="index.php">Add New User</a><br><br>';

while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . 
         " | Name: " . $row['username'] . 
         " | Email: " . $row['email'] . 
         " | <a href='edit.php?id=".$row['id']."'>Edit</a>" . 
         " | <a href='delete.php?id=".$row['id']."'>Delete</a><br>";
}

$conn->close();
?>

