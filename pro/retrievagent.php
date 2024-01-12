<style>
body{
    background-color:lightgreen;
}
</style> 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hingakijyambere";
// Create a connection
$connection = new mysqli($servername, $username, $password, $db);
if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT address, telefone, firstname, lastname FROM agent";
$result = $connection->query($sql);
if($result->num_rows > 0) {
    echo "<table border='5'>";
    echo "<tr>
            <th>ADDRESS</th>
            <th>TELEPHONE</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th colspan='2' >ACTION</th>
        </tr>";
    while($data = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$data["address"]."</td>";
        echo "<td>".$data["telefone"]."</td>";
        echo "<td>".$data["firstname"]."</td>";
        echo "<td>".$data["lastname"]."</td>";
        echo "<td><a href='deleteagent.php?telefone=".$data["telefone"]."'>ddelte agent</a></td>";
        echo "<td><a href='updateagent.php?telefone=".$data["telefone"]."'>edit agent</a></td>";


        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found";
}
$connection->close();
?>
</body>
</html>