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
    <title>Reset Card UID List</title>
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
    
        }

        h1 {
            color: #007bff; /* Blue header text */
            text-align: center;
        }

        .uid-list {
            background-color: #ADD8E6; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Soft shadow */
            max-width: 500px;
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd; /* Light gray border */
            text-align: left;
        }

        th {
            background-color: #007bff; /* Blue header background */
            color: #fff; /* White text */
        }

        tr:nth-child(even) {
            background-color: #87CEEB; /* Light gray background for even rows */
        }

        .remove-btn {
            background-color: #dc3545; /* Red remove button */
            color: #fff; /* White text */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }
    </style>
</head>
<body>
<?php include'header.php'; ?>
    <h1>Reset Card UID List</h1>
    <div class="uid-list">
        <table>
            <thead>
                <tr>
                    <th>UID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Read the reset card UIDs from the JSON file
                $reset_cards = json_decode(file_get_contents('reset_card_uids.json'), true);
                
                // Display each UID in a table row with a remove button
                foreach ($reset_cards as $uid) {
                    echo "<tr>";
                    echo "<td>$uid</td>";
                    echo "<td><form method='post'><input type='hidden' name='uid' value='$uid'><button type='submit' class='remove-btn' name='remove'>Remove</button></form></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Check if a UID removal request is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove'])) {
    // Get the UID to remove
    $uid_to_remove = $_POST['uid'];
    
    // Read the reset card UIDs from the JSON file
    $reset_cards = json_decode(file_get_contents('reset_card_uids.json'), true);
    
    // Find and remove the UID from the array
    $key = array_search($uid_to_remove, $reset_cards);
    if ($key !== false) {
        unset($reset_cards[$key]);
        
        // Save the updated UID list back to the JSON file
        file_put_contents('reset_card_uids.json', json_encode($reset_cards));
        
        // Redirect to the current page to refresh the list
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }
}
?>