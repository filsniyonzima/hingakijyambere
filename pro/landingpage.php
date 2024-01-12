<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: url('path/to/background-image.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .moving-image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: moveImage 10s infinite linear;
            width:5000px;
        height:1200px;
        }

        @keyframes moveImage {
            0% {
                transform: translate(-50%, -50%);
            }
            50% {
                transform: translate(-50%, -50%) rotate(180deg);
            }
            100% {
                transform: translate(-50%, -50%);
            }
        }

        .signup-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .signup-button button {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            background-color: #ff6600;
            color: white;
            cursor: pointer;
        }

        .signup-button .option-list {
            display: none;
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            width: 200px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .signup-button .option-list select {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
        }

        .signup-button .option-list button {
            width: 100%;
            padding: 5px;
            background-color: #ff6600;
            color: white;
            border: none;
            cursor: pointer;
        }

        .signup-button:hover .option-list {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="moving-image" src="fils2.jpeg" alt="Moving Image">
        <div class="signup-button">
            <button>Sign Up</button>
            <div class="option-list">
                <select>
                    <option value="">Select an option</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
                <button>Submit</button>
            </div>
        </div>
    </div>
</body>
</html>