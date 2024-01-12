  <!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:lightblue;
        }
    </style>
</head>
<body>
    <div class="center">
        <form method="POST">
            <h1>Personal Information</h1>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
            <br><br>

            <label for="lastname">Last Name:</label>
            <input type="text" id="last-name" name="lastname" required>
            <br><br>
            <label for="telefone">Phone Number:</label>
            <input type="tel" id="telefone" name="telefone" required>
            <br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="akarere/umurenge" required>
            <br><br>
            <label for="CODE">CODE:</label>
            <input type="text" id="code" name="CODE" required>
            <label for="password">password:</label>
            <input type="text" id="code" name="password" required>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
     $servername="localhost";
     $username="root";
     $password="";
     $db="hingakijyambere";
     $conn=new mysqli($servername,$username,$password,$db);
     if($_SERVER["REQUEST_METHOD"] == "POST"){
$first=$_POST["firstname"];
$last=$_POST["lastname"];
$phone=$_POST["telefone"];
$address=$_POST["address"];
$code=$_POST["CODE"];
$password=$_POST["password"];
$sql="INSERT INTO agent(address,telefone,firstname,lastname,CODE,password) values('$address','$phone','$first','$last','$code','$password')";
if($conn->query($sql)===true){
    echo"Record inserted successfully.";
}
else

echo"Error inserting record: " . $conn->error; 
}
     $conn->close();
    ?>
</body>
</html>
