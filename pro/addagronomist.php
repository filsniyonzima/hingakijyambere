<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-color:lightgreen;
}
</style>
    <title>Add Agronomist</title>
</head>
<body>
    <h2>Add Agronomist</h2>
    <form method="POST">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br><br>
        
        <label for="agronomistid">Agronomist ID:</label>
        <input type="text" id="agronomistid" name="agronomistid" required><br><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "hingakijyambere";

        // Create a connection
        $connection = new mysqli($servername, $username, $password, $db);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Get the form data
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $agronomistid = isset($_POST['agronomistid']) ? $_POST['agronomistid'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';

        // Prepare the insert statement
        $sql = "INSERT INTO agronomist (address, telefone, agronomistid, name) 
                VALUES ('$address', '$telefone', '$agronomistid', '$name')";

        if ($connection->query($sql) === true) {
            echo "Agronomist added successfully.";
        } else {
            if ($connection->errno == 1062) {
                echo "Error adding agronomist: Duplicate entry for Agronomist ID.";
            } else {
                echo "Error adding agronomist: " . $connection->error;
            }
        }

        $connection->close();
    }
    ?>
</body>
</html>