<!DOCTYPE html>
<html>
<head>
  <style>
    body {
        background-color: lightblue;
  }
    
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    <?php
      // Database connection
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "hingakijyambere";

      $conn = mysqli_connect($host, $username, $password, $database);

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch farmer data from the database
      $sql = "SELECT firstname, secondname, address FROM farmer";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // Output data in table rows
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td><a href='umuhinzilogin.php'>" . $row["firstname"] . "</a></td>";
          echo "<td><a href='#'>" . $row["secondname"] . "</a></td>";
          echo "<td><a href='#'>" . $row["address"] . "</a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
      }

      // Close database connection
      mysqli_close($conn);
    ?>
    </tbody>
  </table>
</body>
</html>