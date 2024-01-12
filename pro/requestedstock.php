<?php
session_start();

// Check if the stockid is stored in the session
if(isset($_SESSION["stockid"])) {
  $stockid = $_SESSION["stockid"];

  // TODO: Retrieve rows from the requested table where stockid matches the session stockid
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

  $query = "SELECT * FROM requested WHERE stockid = '$stockid'";
  $result = mysqli_query($connection, $query);

  // Process the retrieved rows
  if (mysqli_num_rows($result) > 0) {
    echo "<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: silver;
        
      }
  
            table {
              width: 100%;
              margin-bottom: 20px;
              border: 5px;
            }
            }
            
            th, td {
              padding: 10px;
              text-align: left;
              border-bottom: 1px solid #ddd;
            }
            
            th {
              background-color: #f2f2f2;
            }
          </style>";
    echo "<table>";
    echo "<tr><th>articleid</th><th>stockid</th><th>season</th><th>quantity</th><th>farmerid</th><th>date</th><th>description</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['articleid'] . "</td>";
      echo "<td>" . $row['stockid'] . "</td>";
      echo "<td>" . $row['season'] . "</td>";
      echo "<td>" . $row['quantity'] . "</td>";
      echo "<td>" . $row['farmerid'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['description'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    $errorMessage = "No rows found.";
  }

  mysqli_close($connection);
} else {
  // If the stockid is not stored in the session, redirect to the login page
  header("Location: login.php");
  exit();
}
?>