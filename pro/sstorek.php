<!DOCTYPE html>
<html>
<head>
  <title>Insert Storekeeper</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: purple;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
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
  </style>
</head>
<body>
  <h1>Insert Storekeeper</h1>
  <form method="POST">
    <label for="storekid">Storekeeper ID:</label>
    <input type="text" id="storekid" name="storekid" required>

    <label for="stockid">Stock ID:</label>
    <input type="text" id="stockid" name="stockid" required>

    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastmame" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Submit">
  </form>

  <?php
  // insert_storekeeper.php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "hingakijyambere";
  
  // Create a connection
  $connection = new mysqli($servername, $username, $password, $db);
  
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $storekid = $_POST["storekid"];
    $stockid = $_POST["stockid"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastmame"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    // TODO: Perform necessary validation and sanitization of the data

    // TODO: Insert the storekeeper into the database using appropriate database operations
    $query = "INSERT INTO storekeeper (storekid, stockid, firstname, lastmame, password, address) VALUES ('$storekid', '$stockid', '$firstname', '$lastname', '$password', '$address')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    echo "<p>Storekeeper inserted successfully!</p>";
  }
  ?>
  <a href="javascript:history.back()">⬅️Go Back</a>
</body>
</html>