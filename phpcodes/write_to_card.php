<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFID Card Writer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #3498db; /* Blue background color */
            color: #ffffff; /* White text color */
        }
        .success-message {
            background-color: #2ecc71; /* Darker green background for the success message */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .go-back {
            padding: 10px;
            cursor: pointer;
            background-color: #3498db; /* Blue button color */
            color: #ffffff; /* White text color */
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="success-message">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['amount'])) {
                $amount = intval($_POST['amount']);
    
                // Store the amount in a file
                file_put_contents('desired_value.txt', $amount);
    
                // Display the success message
                echo "Amount $amount Php has been stored successfully!";
            } else {
                echo "Error: 'amount' parameter not set";
            }
        } else {
            echo "Error: Invalid request method";
        }
        ?>
    </div>
    <button class="go-back" onclick="window.location.href='LoaderWeb.php'">Go Back to Load Outlet</button>
    <button class="go-back" onclick="window.location.href='index.php'">Go Back to Main</button>
</body>
</html>