<!DOCTYPE html>
<html>
<head>
    <title>Agent Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: lightblue;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            width: 300px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-form input[type="submit"] {
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
        <form class="login-form" method="POST">
            <h2>Agent Login</h2>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hingakijyambere";

// Create a connection
$connection = new mysqli($servername, $username, $password, $db);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the inputted password from the form
    $inputtedPassword = $_POST['password'];

    // Prepare and execute a database query to check if the password exists
    $stmt = $connection->prepare("SELECT * FROM Agent WHERE password = ?");
    $stmt->bind_param("s", $inputtedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows (i.e., the password exists)
    if ($result->num_rows > 0) {
        // Password exists in the database
        // Perform the login logic here
        // For example, you can set a session variable to indicate the user is logged in
        session_start();
        $agentCode = $result->fetch_assoc()['CODE'];
        $_SESSION['CODE'] = $agentCode;

        // Redirect to njiaagent.php or perform any other actions
        header("Location: njiaagent.php");
        exit();
    } else {
        // Password does not exist in the database
        // Handle the case where the password is not found
        echo "Invalid password.";
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
}
?>