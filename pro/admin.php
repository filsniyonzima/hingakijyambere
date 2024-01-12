<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
   body{
 background-image:url("fils2.jpeg");
 }
  .search-form {
    display: flex;
    align-items: center;
    max-width: 400px;
  }

  .search-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    flex: 1;
  }

  .search-button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .search-button:hover {
    background-color: #45a049;
  }
  .tbo{
  color:white;
}
  
  </style>
</head>
<body>
<div> 
<form class="search-form">
  <input type="search" id="search-box" name="search" class="search-input" placeholder="Search...">
  <button type="submit" class="search-button">Search</button>
</form>
</div>
      <table class="tbo" width="100%"  height="500" style="border='10px'" >
  <tr>
    <td><a href="formregistfarmer.php">REGISTER NEW FARMER</a>
</td>
    <td><a href="retrieval.php">FARMERS</a></td>
    <tdcolspan="3">Spanned Column</td>
  </tr>
  <tr>
    <td><a href="regagent.php">REGISTER AN AGENT</a> </td>
    <td><a href="retrievagent.php">AGENTS</a></td>
    <td rowspan="3" colspan="3"></td>
  </tr>
  <tr>
    <td>STORE KEEPERS</td>
    <td>STOCKS</td>
  </tr>
  <tr>
    <td>FARMER REQUESTS</td>
    <td></td>
  </tr>
  <tr>
    <td>MANAGER</td>
    <td>AGRONOMIST</td>
    <td>COOPERATIVES</td>
    <td>payment progress</td>
    <td><button onclick="logout()">Logout</button></td>
  </tr>
</table>

</body>
</html>
