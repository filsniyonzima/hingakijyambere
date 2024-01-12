<!DOCTYPE html>
<html>
<head>
    <style>

body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color:silver;
    }
    

    </style>
    <title>Retrieving FARMERS</title>
</head>
<body>
   
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "hingakijyambere";

    // Create a connection
    $connection = new mysqli($servername, $username, $password, $db);

    // Check if the connection is successful
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Retrieve data from the database
    $sql = "SELECT firstname, secondname FROM farmer";
    $result = $connection->query($sql);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Output the data
        echo "<table border='1'>";
        echo "<tr>
                <th>FIRSTNAME</th>
                <th>SECONDNAME</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["secondname"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found.";
    }

    // Close the connection
    $connection->close();
    ?>
</body>
</html>