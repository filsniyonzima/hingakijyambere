<!DOCTYPE html>
<html>
<head>
    <title>Stock List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:lightgreen;

        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .edit-link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Stock List</h2>
    <table>
        <thead>
            <tr>
                <th>Article ID</th>
                <th>Price</th>
                <th>Description</th>
                <th>Date</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "hingakijyambere";

            $connection = new mysqli($servername, $username, $password, $db);

            $result = $connection->query("SELECT * FROM stock");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["articleid"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td><a class='edit-link' href='updatestock.php?articleid=" . $row["articleid"] . "'>Edit</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No articles found in stock.</td></tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
    <a href="javascript:history.back()">⬅️Go Back</a>
</body>
</html>