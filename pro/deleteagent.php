<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hingakijyambere";
// Create a connection
$connection = new mysqli($servername, $username, $password, $db);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the 'telefone' parameter is present in the URL
if (isset($_GET['telefone'])) {
    // Sanitize the 'telefone' parameter to prevent SQL injection
    $telefone = $connection->real_escape_string($_GET['telefone']);

    // Prepare the delete statement
    $sql = "DELETE FROM agent WHERE telefone = '$telefone'";
    if ($connection->query($sql) === true) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $connection->error;
    }
} else {
    echo "No 'telefone' parameter provided.";
}

$connection->close();
?>