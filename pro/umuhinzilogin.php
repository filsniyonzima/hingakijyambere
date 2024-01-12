<!DOCTYPE html>
<html>
<head>
  <title>UMUHINZI</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f2f2f2;
    }

    .form-container h2 {
      text-align: center;
    }

    .form-container input[type="text"],
    .form-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-container button {
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
  <div class="form-container">
    <h2>Login</h2>
    <form method="POST">
      <input type="text" placeholder="firstname" name="firstname" required>
      <input type="text" placeholder="secondname" name="secondname" required>
      <input type="tel" placeholder="telefone" name="telefone" required>
      <input type="password" placeholder="Password" name="password" required>
      <button type="submit">Login</button>
    </form>
    
  </div>
  <?php
// login.php

// Assuming you have already established a database connection
// Replace the database credentials with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hingakijyambere";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $enteredFirstname = $_POST['firstname'];
  $enteredSecondname = $_POST['secondname'];
  $enteredTelefone = $_POST['telefone'];
  $enteredPassword = $_POST['password'];

  // Prepare and execute the database query
  $stmt = $conn->prepare("SELECT firstname, secondname, telefone, password FROM farmer WHERE firstname = ? AND secondname = ? AND telefone = ?");
  $stmt->bind_param("sss", $enteredFirstname, $enteredSecondname, $enteredTelefone);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if any rows were returned
  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $storedFirstname = $row['firstname'];
    $storedSecondname = $row['secondname'];
    $storedTelefone = $row['telefone'];
    $storedPassword = $row['password'];

    // Verify the entered password against the stored password
    if ($enteredPassword === $storedPassword) {
      // Credentials match, redirect to the farmerdash.php page
      header('Location: farmerdash.php');
      exit;
    } else {
      // Invalid password, display an error message or redirect to a login failure page
      echo 'Invalid password! Please try again.';
    }
  } else {
    // Invalid credentials, display an error message or redirect to a login failure page
    echo 'Invalid credentials! Please try again.';
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
}
?>
</body>
</html>
