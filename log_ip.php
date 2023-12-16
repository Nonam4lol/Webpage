<?php

// Replace these values with your actual MySQL database credentials
$hostname = 'your_mysql_host';
$username = 'your_mysql_username';
$password = 'your_mysql_password';
$database = 'your_mysql_database';

// Create a connection to the MySQL database
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's IP address
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Insert the IP address into the database
$query = "INSERT INTO ip_log (ip_address) VALUES ('$ipAddress')";
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Error in SQL query: " . $conn->error);
}

// Close the database connection
$conn->close();

echo "IP address '$ipAddress' logged to MySQL database successfully!";
?>
