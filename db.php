<?php
// Database credentials
$servername = "localhost";
$username = "u685768303_sarkariyojanaw";
$password = "Yojana@8808";
$dbname = "u685768303_SarkariYojana";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the connection character set to UTF-8
if (!$conn->set_charset("utf8")) {
    die("Error setting character set utf8: " . $conn->error);
}

// Function to safely escape strings for SQL to prevent SQL injection
function escapeString($value) {
    global $conn;
    return $conn->real_escape_string($value);
}

?>
