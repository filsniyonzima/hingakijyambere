<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $role = $_POST["role"];
    $password = $_POST["password"];

    // Database connection details
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "hingakijyambere";

    // Create a new connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE role = ? AND password = ?");
    $stmt->bind_param("ss", $role, $password);
    $stmt->execute();
    $stmt->store_result();
    
    // Check if a matching user is found
    if ($stmt->num_rows > 0) {
        switch ($role) {
            case "farmer":
                header("Location: farmerside.php");
                break;
            case "admin":
                header("Location: dashboardadmin.php");
                break;
            case "agent":
                header("Location: njiaagent.php");
                break;
            case "agronomist":
                header("Location: agrononeboard.php");
                break;
            case "storekeeper":
                header("Location: stockdashb.php");
                break;
            default:
                $loginError = "Invalid role.";
                break;
        }
        exit();
    } else {
        $loginError = "Invalid username or password.";
    }
    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:url(wpp1.jpg);
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p.error-message {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>User Login</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="role">login as:</label>
            <input type="text" id="role" name="role" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
        <p class="error-message"><?php echo isset($loginError) ? $loginError : ""; ?></p>
    </form>
</body>
</html>