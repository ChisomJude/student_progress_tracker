<?php
$servername = "localhost"; #use ip of the server instead
$username = "webuser";
$password = "webspass";
$database = "user_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
