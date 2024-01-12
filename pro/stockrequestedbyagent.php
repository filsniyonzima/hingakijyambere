<?php
session_start(); // Start the session

$farmerID = ""; // Initialize the variable

// Check if the CODE is stored in the session
if (isset($_SESSION['CODE'])) {
    $farmerID = $_SESSION['CODE'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hingakijyambere";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select all rows from requested table for the given farmer ID
$sql = "SELECT * FROM requested WHERE farmerid = '$farmerID'";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Article ID</th>
            <th>Quantity</th>
            <th>Stock ID</th>
            <th>Date</th>
            <th>Season</th>
            <th>Description</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["articleid"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["stockid"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["season"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found.</td></tr>";
        }
        ?>
    </table>
    <a href="javascript:history.back()">⬅️Go Back</a>

</body>
</html>