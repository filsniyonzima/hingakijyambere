html
Copy
<!DOCTYPE html>
<html>
<head>
  <title>Insert Storekeeper</title>
  <style>
    body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-color:lightgreen;
        }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    
    tr:hover {
      background-color: #e6e6e6;
    }
    
    a {
      color: #0000EE;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <?php
  // insert_storekeeper.php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "hingakijyambere";
  
  // Create a connection
  $connection = new mysqli($servername, $username, $password, $db);
  
  // Check if the form is submitted
  
  // TODO: Perform necessary validation and sanitization of the data

  $query = "SELECT stockid, firstname, lastmame FROM storekeeper";
  $result = mysqli_query($connection, $query);
  
  if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Stock ID</th><th>First Name</th><th>Last Name</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['stockid'] . '</td>';
      echo '<td><a href="storekeeplogin.php">' . $row['firstname'] . '</a></td>';
      echo '<td>' . $row['lastmame'] . '</td>';
      echo '</tr>';
    }
    echo '</table>';
  } else {
      echo '<p>No storekeepers found!</p>';
  }

  mysqli_close($connection);
  ?>
  <a href="javascript:history.back()">⬅️Go Back</a>
</body>
</html>