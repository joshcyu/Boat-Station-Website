<style>
    .value {
        font-size: 24px;
        color: #009933;
        font-weight: bold;
        margin-top: 20px;
        animation: slideInUp 1s ease;
        text-align: center;
    }

    .value span {
        background-color: #ffcc00;
        padding: 5px 10px;
        border-radius: 5px;
    }

    @keyframes slideInUp {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
<?php
/* Database connection settings */
$servername = "mysql5026.site4now.net";
$username = "aa376f_dabase";		//put your phpmyadmin username.(default is "root")
$password = "Zenintoji03";			//if your phpmyadmin has a password put it here.(default is "root")
$dbname = "db_aa376f_dabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the POST variables are set
if(isset($_POST['uid']) && isset($_POST['value'])) {
    // Get UID and card value from POST request
    $uid = $_POST['uid'];
    $value = $_POST['value'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO rfid_data (uid, value) VALUES ('$uid', '$value')";

    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else if(isset($_POST['uid'])) {
    // Get UID from POST request
    $uid = $_POST['uid'];

    // Prepare SQL statement to retrieve value from the database
    $sql = "SELECT value FROM rfid_data WHERE uid = '$uid' ORDER BY timestamp DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the most recent row
        while($row = $result->fetch_assoc()) {
            echo '<div class="value">' . "Card Balance " . $row["value"] . " Pesos" . '</div>';
        }
    } else {
        echo "No records found for UID: " . $uid;
    }
} else {
    echo "Invalid request";
}

// Close connection
$conn->close();
?>