<!DOCTYPE html>
<html>
<head>
  <title>Settings</title>
  <style>
    body {
        background-color:lightgreen; 
      font-family: Arial, sans-serif;
    }
    
    h1 {
      text-align: center;
    }
    
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
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
    input[type="email"],
    input[type="password"],
    textarea,
    select {
      width: 100%;
      padding: 8px;
      border: none;
      background-color: #f2f2f2;
      border-radius: 4px;
    }
    
    .btn-save {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .compact-layout .form-group {
      display: flex;
      align-items: center;
    }
    
    .compact-layout .form-group label {
      flex-basis: 120px;
    }
    
    .compact-layout .form-group input,
    .compact-layout .form-group select {
      flex-grow: 1;
    }
    
    .compact-layout .btn-save {
      margin-top: 20px;
    }
    
    .left-align {
      text-align: left;
    }
  </style>
</head>
<body>
  <h1>Settings</h1>
  <div class="container compact-layout left-align">
    <form method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="umuhinzi">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="filsniyonzima @gmail.com">
      </div>
      
      <div class="form-group">
        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" rows="5">started in 2023  and expecting to work with thausand million of people ..</textarea>
      </div>
      <div class="form-group">
        <label for="language">Language:</label>
        <select id="language" name="language">
        <option value="kin">kinyarwanda</option>

          <option value="en">English</option>
          <option value="fr">French</option>
        </select>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone" value="0787194800">
      </div>
      <button type="submit" class="btn-save">Save Changes</button>
      <label for="language"><a href="windback.php">back</a>:</label>
    </form>
  </div>
</body>
</html>