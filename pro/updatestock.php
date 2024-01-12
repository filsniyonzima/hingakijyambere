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
      background-color: darkgreen;
    }

    .form-container {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color:lightgreen;
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
    <h2>UPDATE  Item</h2>

    <body>
      <div>
        <h2>hindura</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <label for="articleid">Article ID:</label>
          <input type="text" name="articleid" id="articleid" required><br>

          <label for="price">Price:</label>
          <input type="number" name="price" id="price" step="0.01" required><br>

          <label for="date">Date:</label>
          <input type="date" name="date" id="date" required><br>

          <label for="description">Description:</label>
          <textarea name="description" id="description" required></textarea><br>

          <input type="submit" value="update">
        </form>
      </div>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "hingakijyambere";

      $connection = new mysqli($servername, $username, $password, $db);

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $articleid = $_POST["articleid"];
          $price = $_POST["price"];
          $description = $_POST["description"];
          $date = $_POST["date"];

          $updateQuery = "UPDATE stock SET articleid='$articleid', price='$price', description='$description', date='$date' WHERE articleid='$articleid'";
          if ($connection->query($updateQuery) === true) {
              echo "<p>Article successfully updated.</p>";
          } else {
              echo "<p>Error occurred: " . $connection->error . "</p>";
          }
      }

      $connection->close();
      ?>
    <a href="javascript:history.back()">⬅️Go Back</a>

    </body>
</html>