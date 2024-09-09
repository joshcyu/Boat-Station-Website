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
    <title>Set Log Limit</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php include'header.php'; ?> 
    <div class="container">
        <h1>Set Boat(Log) Limit</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="notification success">
                Log count(capacity) has been updated successfully.
            </div>
        <?php endif; ?>
        <form action="update_limit.php" method="post">
            <label for="log_limit">Enter the number of log entries(capacity):</label><br>
            <input type="number" id="log_limit" name="log_limit" required><br><br>
            <input type="submit" value="Set Limit">
        </form>
    </div>
</body>
</html>