<?php
$conn = new mysqli("localhost", "root", "", "simpledb");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully!<br>";
    echo '<a href="view.php">Back to Users</a>';
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
