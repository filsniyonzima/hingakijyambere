<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$db = "hingakijyambere";

$connection = new mysqli($servername, $username, $password, $db);

// Check if the farmer ID is stored in the session
if (isset($_SESSION['farmerid'])) {
    $farmerID = $_SESSION['farmerid'];

    // Prepare and execute a database query to select all rows from the table using the farmer ID
    $stmt = $connection->prepare("SELECT * FROM requested WHERE farmerid = ?");
    $stmt->bind_param("s", $farmerID);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        echo '<table class="data-table">';
        echo '<tr><th>Article ID</th><th>Stock ID</th><th>Season</th><th>Quantity</th><th>Farmer ID</th><th>Date</th><th>Description</th></tr>';

        // Fetch and display each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$row['articleid'].'</td>';
            echo '<td>'.$row['stockid'].'</td>';
            echo '<td>'.$row['season'].'</td>';
            echo '<td>'.$row['quantity'].'</td>';
            echo '<td>'.$row['farmerid'].'</td>';
            echo '<td>'.$row['date'].'</td>';
            echo '<td>'.$row['description'].'</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "No rows found.";
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
} else {
    echo "Farmer ID not found in the session.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer Data</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 4px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #dddddd;
        }

        .data-table th,
        .data-table td {
            padding: 8px;
            border: 1px solid #dddddd;
            text-align: left;
        }

        .data-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Farmer  requested Data</h2>
        <?php
        // Display the table here
        ?>
    </div>
</body>
</html>