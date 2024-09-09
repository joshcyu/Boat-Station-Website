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
    <title>Add Reset Card UID</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f5ff; /* Light blue background */
            color: #333; /* Dark gray text */
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #007bff; /* Blue header text */
            text-align: center;
        }

        form {
            background-color: #87CEEB; /* Light blue form background */
            padding: 10px; /* Reduced padding */
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Soft shadow */
            max-width: 300px; /* Reduced form width */
            margin: 0 auto; /* Center the form horizontally */
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 20px); /* Reduced input width */
            padding: 8px; /* Reduced padding */
            margin-bottom: 10px; /* Reduced margin */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff; /* Blue submit button */
            color: #fff; /* White text */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%; /* Button width */
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .notification {
            background-color: #4CAF50; /* Green */
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<?php include'header.php'; ?> 
    <h1>Add Reset Card UID</h1>
    <form action="add_reset_card.php" method="post">
        <label for="card_uid">Card UID:</label>
        <input type="text" id="card_uid" name="card_uid" required>
        <input type="submit" value="Submit">
    </form>
    <?php if (isset($_GET['success'])): ?>
        <div class="notification">
            New reset card has been added successfully!
        </div>
    <?php endif; ?>
</body>
</html>