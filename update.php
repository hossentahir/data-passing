<?php
$conn = new mysqli("localhost", "root", "", "simpledb");

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "User updated successfully!<br>";
    echo '<a href="view.php">Back to Users</a>';
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
