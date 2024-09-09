<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Reset Card Successfully Added</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f5ff; /* Light blue background */
            color: #333; /* Dark gray text */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #007bff; /* Blue header text */
            text-align: center;
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #007bff; /* Blue button on hover */
            color: #fff; /* White text on hover */
        }
    </style>
</head>
<body>
    
    <h1>New Reset Card Successfully Added</h1>
    <div class="button-container">
        <button class="button" onclick="goToMain()">Go Back To Main</button>
        <button class="button" onclick="goToAdder()">Go Back To Reset Card Adder</button>
        <button class="button" onclick="goToList()">Go To List of Reset Cards</button>
    </div>

    <script>
        function goToMain() {
            window.location.href = "index.php"; // Replace with your main page URL
        }

        function goToAdder() {
            window.location.href ="addresetcard.php"; // Replace with your reset card adder page URL
        }
        function goToList() {
            window.location.href ="reset_card_list.php"; // Replace with your reset card adder page URL
        }
    </script>
</body>
</html>