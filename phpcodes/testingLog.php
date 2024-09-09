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
    <title>Saved Departures</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
<?php include'header.php'; ?> 
    <div class="container">
        <h1>Saved Departures</h1>
        <p class="legend"> Note: Open Departure Record before clicking on Print</p>
            <thead>

            </thead>
            <tbody>
                <?php include 'testingLogDB1.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>