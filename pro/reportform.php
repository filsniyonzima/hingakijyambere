<!DOCTYPE html>
<html>
<head>
  <title>Problem Report Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:darkblue;
      color:white;

    }
    
    h1 {
      text-align: center;
    }
    
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 2px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    input[type="text"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .btn-submit {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Problem Report Form</h1>
  <div class="container">
    <form  method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="title">Problem Title:</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="description">Problem Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <label for="severity">uburemerebwikibazo</label>
        <select id="severity" name="severity" required>
          <option value="low">biroroshye</option>
          <option value="medium">birasanzwe</option>
          <option value="high">birihutirwa</option>
        </select>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required>
      </div>
      
      <div class="form-group">
        
      </div>
      <div class="form-group">
        <label for="attachment">Attachment:</label>
        <input type="file" id="attachment" name="attachment">
      </div>
      <button type="submit" class="btn-submit">Submit</button>
    </form>
    <?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$description = $_POST['description'];
$severity = $_POST['severity'];
$device = $_POST['device'];

// Compose the email content
$subject = "New problem report: $title";
$message = "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Title: $title\n";
$message .= "Description: $description\n";
$message .= "Severity: $severity\n";

// Set the recipient and sender email addresses
$recipientEmail = 'niyonzimafils1@gmail.com';
$senderEmail = $email;

// Set additional headers
$headers = "From: $name <$senderEmail>";

// Send the email
$mailSent = mail($recipientEmail, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Thank you for submitting the form. Your report has been successfully sent.";
} else {
    echo "Sorry, there was an error sending your report. Please try again later.";
}
?>
  </div>
  <a href="javascript:history.back()">⬅️Go Back</a>

</body>
</html>