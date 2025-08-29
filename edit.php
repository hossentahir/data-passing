<?php
$conn = new mysqli("localhost", "root", "", "simpledb");

$id = $_GET['id']; // কোন user edit হবে
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit User</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="username" value="<?php echo $row['username']; ?>">
    <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <button type="submit">Update</button> 
</form>
