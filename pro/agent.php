




<!DOCTYPE html>
<html>
<head>
  <title>aegnt login</title>
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

    .form-container input[type="email"],
    .form-container input[type="text"] {
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
    <h2>login  Form</h2>
    <form method="POST">
      <input type="tel" placeholder="telefone" name="telefone" required>
      <input type="password" placeholder="password"name="password" required>
      <button type="submit" name="submit">login</button>

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
  $enteredFirstname = $_POST['telefone'];
  $enteredSecondname = $_POST['password'];

  // Prepare and execute the database query
  $stmt = $conn->prepare("SELECT telefone,password FROM agent WHERE telefone = ? AND password = ?");
  $stmt->bind_param("ss", $enteredFirstname, $enteredSecondname);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if any rows were returned
  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $storedFirstname = $row['telefone'];
    $storedSecondname = $row['password'];

    // Verify the entered password against the stored password
    if ( $enteredSecondname===  $storedSecondname) {
      // Credentials match, redirect to the farmerdash.php page
      header('Location: agentdboard.php');
      exit;
    } else {
      // Invalid password, display an error message or redirect to a login failure page
      echo 'Invalid code! Please try again.';
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