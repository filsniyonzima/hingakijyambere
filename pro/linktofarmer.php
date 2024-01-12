<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$db = "hingakijyambere";

$connection = new mysqli($servername, $username, $password, $db);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the inputted password from the form
    $inputtedPassword = $_POST['password'];

    // Prepare and execute a database query to retrieve the farmer ID based on the password
    $stmt = $connection->prepare("SELECT farmerid FROM Farmer WHERE password = ?");
    $stmt->bind_param("s", $inputtedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows (i.e., the password is correct)
    if ($result->num_rows > 0) {
        // Password is correct, retrieve the farmer ID and store it in a session variable
        $row = $result->fetch_assoc();
        $farmerID = $row['farmerid'];
        $_SESSION['farmerid'] = $farmerID;

        // Redirect to farmerside.php or perform any other actions
        header("Location: farmerdash.php");
        exit();
    } else {
        // Password is incorrect
        // Handle the case where the password is incorrect
        echo "Incorrect password.";
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer Sign-up</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: darkgreen;
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

        .signup-form input[type="password"] {
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
            <h2>Farmer Login</h2>
            <input type="password" name="password" placeholder="Enter password" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>