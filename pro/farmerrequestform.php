<?php
session_start(); // Start the session

$farmerID = ""; // Initialize the variable

// Check if the farmer ID is stored in the session
if (isset($_SESSION['farmerid'])) {
    $farmerID = $_SESSION['farmerid'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hingakijyambere";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ar = $_POST["articleid"];
    $qua = $_POST["quantity"];
    $sto = $_POST["stockid"];
    $date = $_POST["date"];
    $season = $_POST["season"];
    $des = $_POST['description'];

    // Prepare the INSERT statement
    $stmt = $conn->prepare("INSERT INTO requested (articleid, stockid, season, quantity, farmerid, date, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $ar, $sto, $season, $qua, $farmerID, $date, $des);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color:darkblue;
      color:white;

    }
    
      .form-container {
      max-width: 400px;
      margin: 0 auto;
      background-color:darkblue;

    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group .btn-submit {
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group .btn-submit:hover {
      background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST">
            <div class="form-group">
                <label for="farmerid">Farmer ID:</label>
                <input type="text" id="farmerid" name="farmerid" value="<?php echo $farmerID; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="articleid">Article ID:</label>
                <input type="text" id="articleid" name="articleid" required>
                <label for="description">DESCRIPTION:</label>
                <input type="text" id="articledescription" name="description" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="stockid">Stock ID:</label>
                <input type="text" id="stockid" name="stockid" required>
            </div>
            <div class="form-group">
                <label for="season">Season:</label>
                <select id="season" name="season" required>
                    <option value="">Select a season</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn-submit">
            </div>
        </form>
    </div>
</body>
</html>