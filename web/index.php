<?php
$conn = new mysqli("mysql", "demo", "demo", "demo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");

echo "<h1>Users</h1>";

while($row = $result->fetch_assoc()) {
    echo $row["name"] . " - " . $row["email"] . "<br>";
}

$conn->close();
?>