<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $password = $_POST["password"];

  // TODO: Validate the password and retrieve the storekid from the database
  $servername = "localhost";
  $username = "root";
  $password_db = "";
  $dbname = "hingakijyambere";

  // Create a connection
  $connection = new mysqli($servername, $username, $password_db, $dbname);

  // Check connection
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  $password = mysqli_real_escape_string($connection, $password);

  $query = "SELECT stockid FROM storekeeper WHERE password = '$password'";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $storekid = $row['stockid'];
    $_SESSION["stockid"] = $storekid;
    header("Location: storekeeper.php");
    exit();
  } else {
    $errorMessage = "Invalid password. Please try again.";
  }

  mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <title>Login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color:lightblue;
    }

    .container {
      width: 300px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
      text-align: center;
    }

    .error-message {
      color: red;
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Login</h2>
  <?php if (isset($errorMessage)) { ?>
    <p><?php echo $errorMessage; ?></p>
  <?php } ?>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <input type="submit" value="Login">
  </form>
  </div>
</body>
</html>