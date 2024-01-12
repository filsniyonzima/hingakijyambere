<!DOCTYPE html>
<html>
<head>
    <title>admin Sign-up</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color:black;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-form {
            width: 300px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .signup-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #ff6600;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="signup-form" method="POST">
            <h2>Farmer Sign-up</h2>
            <input type="password" name="agronomistid" placeholder="id" required>
            <input type="submit" value="Submit">
        </form>
    </div>
    <a href="javascript:history.back()">⬅️Go Back</a>

</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hingakijyambere";

$connection = new mysqli($servername, $username, $password, $db);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the inputted farmer ID from the form
    $inputtedFarmerID = $_POST['agronomistid'];

    // Prepare and execute a database query to check if the farmer ID exists
    $stmt = $connection->prepare("SELECT * FROM agronomist WHERE agronomistid = ?");
    $stmt->bind_param("s", $inputtedFarmerID);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows (i.e., the farmer ID exists)
    if ($result->num_rows > 0) {
        // Farmer ID exists in the database
        // Redirect to farmerside.php or perform any other actions
        header("Location: agrononeboard.php");
        exit();
    } else {
        // Farmer ID does not exist in the database
        // Handle the case where the farmer ID is not found
        echo "The farmer ID does not exist.";
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
}
?>
</html>