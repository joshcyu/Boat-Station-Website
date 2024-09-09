<!DOCTYPE html>
<html>
<head>
    <title>Registration Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .receipt {
            background-color: #fff;
            padding: 104px;
            border: 2px solid #000;
            width: 1000px;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            font-family: Arial, sans-serif;
            text-align: left;
        }

        .receipt h3 {
            margin-top: 0;
            font-size: 104px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            text-align: center;
        }

        .receipt p {
            margin: 10px 0;
            font-size: 100px;
        }

        .receipt strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    // Include the file that contains the database connection details
    include("connectDB.php");

    // Retrieve user data from the database
    $retrieve_sql = "SELECT * FROM display_user ORDER BY id DESC LIMIT 1"; // Retrieve the latest registered user
    $result = $conn->query($retrieve_sql);

    if ($result->num_rows > 0) {
        echo "<div class='receipt'>";
        echo "<h3>Registration Receipt:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
            echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
            echo "<p><strong>Contact:</strong> " . $row["contact"] . "</p>";
            echo "<p><strong>Emergency#:</strong> " . $row["emergency"] . "</p>";
            echo "<p><strong>Age:</strong> " . $row["age"] . "</p>";
            echo "<p><strong>Location:</strong> " . $row["location"] . "</p>";
            echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
        }
        echo "</div>";
    } else {
        echo "<div class='receipt'>";
        echo "<p>No user found</p>";
        echo "</div>";
    }
    ?>
</body>
</html>