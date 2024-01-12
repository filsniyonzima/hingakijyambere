<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* CSS styles for the greeting form */
        .greeting-form {
            position: fixed;
            top: 50%;
            right: 310px;
            transform: translate(50%, -50%);
            background-color:purple;
            padding: 20px;
            border-radius: 70px;
            animation-name: moveMessage;
            animation-duration: 20s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        .greeting-message {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        @keyframes moveMessage {
            0% {
                transform: translate(40%, -70%);
            }
            25% {
                transform: translate(30%, -40%);
            }
            50% {
                transform: translate(60%, -30%);
            }
            75% {
                transform: translate(30%, -40%);
            }
            100% {
                transform: translate(40%, -70%);
            }
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Background Image Example</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>


    <div class="body">

        <div class="navbar">

            <img src="" class="logo">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contact/indexcontact.html">CONTACT</a></li>
                <li><a href="Services.php">SERVICES</a></li>
                <li><a href="formregistfarmer.php">SIGN IN</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>allowing farmers to maximize the productivity — <br>in all their agricultural activities</h1>

            <P>dufasha abantu bari mumwuga wubuhinzi bakorana na agronome ubafasha <br>kuva batangiye igihembwe kihinga tukajyana kugeza kwisarura .</P>
            <div>
                <button type="button" onclick="location.href='userlogin.php'"><span></span>LOGIN</button>

            </div>
            <div class="greeting-form">
                <p class="greeting-message" id="greetingMessage"></p>
            </div>
        </div>
    </div>

    <script>
        // Get the current hour
        var currentHour = new Date().getHours();

        // Get the greeting message based on the current hour
        var greetingMessage;
        if (currentHour < 12) {
            greetingMessage = "Good morning";
        } else if (currentHour < 18) {
            greetingMessage = "Good afternoon";
        } else {
            greetingMessage = "Good evening";
        }

        // Set the greeting message
        var greetingElement = document.getElementById("greetingMessage");
        greetingElement.textContent = greetingMessage + ", welcome to hingakijyambere platform";
    </script>
</body>

</html>