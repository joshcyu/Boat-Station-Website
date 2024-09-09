<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Outlet</title>
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
        form {
            background-color: #2980b9; /* Darker blue background for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input {
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            cursor: pointer;
            background-color: #3498db; /* Blue button color */
            color: #ffffff; /* White text color */
            border: none;
            border-radius: 5px;
        }
        .go-back {
            position: absolute;
            top: 20px;
            left: 20px;
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
    
    <button class="go-back" onclick="window.location.href='HomePage.php'">Go Back to Home</button>
    <h2>Loading Outlet</h2>
    <form action="write_to_card.php" method="post">
        <label for="amount">Enter Amount:</label>
        <input type="number" id="amount" name="amount" required>
        <br>
        <button type="submit">Write to Card</button>
    </form>
</body>
</html>