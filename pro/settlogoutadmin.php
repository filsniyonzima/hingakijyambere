<!DOCTYPE html>
<html>
<head>
  <title>Settings</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f7f7f7;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
}

.content {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

h2 {
  color: #333;
}

form {
  display: grid;
  gap: 10px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.logout-link {
  display: block;
  margin-top: 20px;
  color: #0099ff;
  text-decoration: none;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

footer p {
  margin: 0;
}
  </style>
</head>
<body>
  <header>
    <h1>Settings</h1>
  </header>
  
  <section class="content">
    <h2>Account Settings</h2>

    
      <label for="name">Names:</label>
      <input type="text" id="name" name="name" placeholder="Your Name">
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Your Email">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="New Password">
      
      <label for="language">Language:</label>
      <select id="language" name="language">
        <option value="kinyarwanda">Kinyarwanda</option>
        <option value="swahili">Swahili</option>
        <option value="english">English</option>
      </select>
      
      <input type="submit" value="Save Changes">
    
    
    <a href="njiafarmer.php" class="logout-link">Logout</a>
  </section>
  
  <footer>
    <p>&copy; 2024 umwuga unoze.</p>
  </footer>
</body>
</html>