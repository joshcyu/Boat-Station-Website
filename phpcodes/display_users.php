<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <link rel="stylesheet" type="text/css" href="css/display_users2.css">
</head>
<body>
<?php include'header.php'; ?> 
<h2 class="slide-in">Incoming Registrations</h2>
    <?php
    // Include the file that contains the database connection details
    include("connectDB.php");

    // Check if a user ID to delete is provided in the URL
    if(isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $delete_sql = "DELETE FROM display_user WHERE id = $delete_id";
        if ($conn->query($delete_sql) === TRUE) {
            echo "<p>User with ID $delete_id has been deleted.</p>";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
    }

    // Fetch data from the users table
    $sql = "SELECT * FROM display_user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Contact</th><th>Emergency#</th><th>Age</th><th>Location</th><th>Gender</th><th>Action</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["contact"]. "</td><td>" .$row["emergency"]. "</td><td>" . $row["age"]. "</td><td>" . $row["location"]. "</td><td>" . $row["gender"]. "</td><td><button class='delete-btn' onclick=\"deleteUser(" . $row['id'] . ")\">Delete</button></td></tr>";
        }
        echo "</table>";
    } else {
        echo "No registered users yet.";
    }
    $conn->close();
    ?>
    <script>
        function deleteUser(userId) {
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = 'display_users.php?delete_id=' + userId;
            }
        }
    </script>
</body>
</html>