<!-- <?php
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
?> -->

<?php
$conn = new mysqli("localhost", "root", "", "simpledb");

$username = $_POST['username'];  
$email = $_POST['email'];

$sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
$results = $conn->query("SELECT * FROM users"); 
echo $results->num_rows; 
if ($conn->query($sql) === TRUE) {
    echo "<h2>Data Saved Successfully!</h2>";
    echo '<a href="view.php">See All Users</a>';
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>


