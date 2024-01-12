<!DOCTYPE html>
<html>
<head>
    <title>My PAGE</title>
    <style>
        /* CSS styles for the sidebar and top navigation */
        
            body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('fils2.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }
          

        #sidebar {
            width: 100px;
            background-color:blueviolet;
                                   height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 173px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 20px;
        }

        #sidebar a {
            display: block;
            padding: 16px;
            color: #000;
            text-decoration: none;
            width: 143px;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 10px;
    height: 90px;
        }

        #sidebar a:hover {
            background-color: #ddd;
        }

        #top-navigation {
            background-color: #f1f1f1;
            padding: 16px;
            position: fixed;
            left: 200px;
            top: 0;
            width: calc(100% - 200px);
        }

        #search-box {
            margin-right: 16px;
        }

        #notifications {
            margin-right: 16px;
        }

        #personal-settings {
            margin-right: 16px;
        }
        #allign{
            
        }
        .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 70px;
      box-shadow: 0px 8px 1px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      display: block;
    }

    .dropdown-content a:hover {
      background-color:aqua;
    }

    .dropdown-content.right {
      top: 0;
    }
        /* CSS styles for the search box */
        .search-container {
            position: relative;
            display: inline-block;
            margin-right: 14px;
        }

        .search-input {
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 200px;
            transition: width 0.3s ease-in-out;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            right: 12px;
            font-size: 20px;
            transform: translateY(-50%);
            color: #888;
            transition: color 0.3s ease-in-out;
            cursor: pointer;
        }

        .search-input:focus,
        .search-input:hover {
            outline: none;
            border-color: #888;
        }

        .search-input:focus + .search-icon,
        .search-input:hover + .search-icon {
            color: #333;}
            .container{
	display:flex;
	flex-wrap:wrap;
	background-color: lightgreen;
	}
        .card {
    width: 183px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 20px;
}
.card:hover {
    background-color: #ddd;
    color: #4CAF50;
    border: 1px solid #4CAF50;
}

    </style>
</head>
<body>
    <div id="sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12c0 2.521.945 4.82 2.49 6.582 1.24 1.52 3.266 3.066 6.439 3.358a9.731 9.731 0 0 0 2.141 0c3.174-.292 5.199-1.839 6.439-3.358A9.948 9.948 0 0 0 22 12c0-5.514-4.486-10-10-10zM4.709 8.724c.154.09.308.182.456.276.396.25.791.5 1.286.688.494.187 1.088.312 1.879.312.792 0 1.386-.125 1.881-.313s.891-.437 1.287-.687.792-.5 1.287-.688c.494-.187 1.088-.312 1.88-.312s1.386.125 1.88.313c.495.187.891.437 1.287.687s.792.5 1.287.688c.178.067.374.122.581.171.191.682.3 1.398.3 2.141 0 .843-.133 1.654-.375 2.417-.261.195-.733.474-1.577.756-.769.256-1.672.458-2.685.602a25.337 25.337 0 0 1-6.727 0c-1.013-.144-1.916-.346-2.685-.602-.844-.282-1.316-.561-1.577-.756a7.953 7.953 0 0 1 .335-5.693z"></path><circle cx="8.5" cy="12.5" r="1.5"></circle><circle cx="15.5" cy="12.5" r="1.5"></circle></svg>
        <br/>
        <div class="dropdown">
            <button class="dropbtn"><a href="#">➕ABOUT USERS</a></button>
            <div class="dropdown-content">
              <a href="linktofarmer.php">FARMER</a>
              <a href="agentdrop.php">AGENT</a>

              <a href="#">STORE KEEPER</a>
              <a href="#">AGRONOMIST<br/>dr tito<br/>tel:0787194800</a>

            </div>
          </div>
        <a href="#">🗑️Remove Users❌</a>
        <div class="dropdown">
            <button class="dropbtn"><select onchange="window.location.href=this.value;">
        <option value="">Select an option</option>
        <option value="#"><a href="">add agronomist❌</a></option>
        <option value="#">register agent❌</option>
        <option value="#">registerfarmer❌</option>
    </select><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>edit user
</button>
            <div class="dropdown-content">
              <a href="#">farmer</a>
              <a href="#">AGENT</a>

              <a href="#">storekeeper</a>
              <a href="#">Agronome</a>

            </div>
          </div>
        <a href="settingadmin.php">⚙️Settings</a>
        <a href="help.php">❓Help</a>
        

    </div>

    <div id="top-navigation">
        <div id="allign">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search">
                <i class="search-icon"><a href="#">🔍</a></i>
            </div>
        <a href="#"style="margin-left: 600px;"></a>🔔Notifications</a>
        <a href="#">👤Personal Settings</a>
    </div>
    </div>

    <!-- Your webpage content goes here -->
    <div style="margin-left: 200px; padding-top: 80px;width: 100%;">
        <div class="container">
        <div class="card">
            <ul>
            
                <a href="retrieval.php" class="button">FARMERS</a>
                </ul>
            </div>
            <div class="card">
                <ul>
                
                    <a href="agentdrop.php" class="button">AGENTS</a>
                    </ul>
                </div>
                <div class="card">
                    <ul>
                    
                        <a href="retrivestock.php" class="button">STOCKS</a>
                        </ul>
                    </div>
                    <div class="card">
                        <ul>
                        
                            <a href="#" class="button">AGRONOMIST</a>
                            </ul>
                        </div>
                        <div class="card">
                            <ul>
                            
                                <a href="#" class="button">COOPERATIVES</a>
                                </ul>
                            </div>
                            <div class="card">
                                <ul>
                                
                                    <a href="#" class="button">DISTRICTS</a>
                                    </ul>
                                </div>
    </div>


</div>
</body>
</html>