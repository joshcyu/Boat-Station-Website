<?php
/* Database connection settings */
   $servername = "mysql5026.site4now.net";
    $username = "aa376f_dabase";		
    $password = "Zenintoji03";			
    $dbname = "db_aa376f_dabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read the contents of config.json
$configFile = file_get_contents('config.json');

// Decode the JSON data into a PHP array
$config = json_decode($configFile, true);

// Check if the 'log_limit' key exists in the config array
if (isset($config['log_limit'])) {
    // Assign the value of 'log_limit' to $batchLimit
    $batchLimit = $config['log_limit'];
} else {
    // If 'log_limit' key doesn't exist, set a default value
    $batchLimit = 2; // or any other default value you prefer
}

// Fetch logs from the database
$sql = "SELECT * FROM users_logs";
$result = $conn->query($sql);

// Output table headers
echo "<tbody>";

// Initialize variables for batch count and list number
$batchCount = 0;
$listNumber = 1;

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Store the log for saving and resetting later
        $logs[] = $row;
        
        // Increment batch count and check if it reaches the batch limit
        $batchCount++;
        if ($batchCount == $batchLimit) {
            // Get the date and time of the first log in the batch
            $firstLogDate = $logs[0]["checkindate"];
            $firstLogTime = $logs[0]["timein"];
            
            // Output clickable link for the saved logs
            echo "<div id='departure$listNumber'>";
            echo "<a href='#' onclick='showLogs($listNumber)'>View Departure $listNumber ($firstLogDate, $firstLogTime)</a><br>";
            // Output the corresponding table for this batch of logs
            echo "<table id='logs$listNumber' style='display:none; border-collapse: collapse; width: 100%; border: 1px solid black;'>"; // Hide the table initially
            // Output table headers
            echo "<thead><tr><th style='border: 1px solid black; padding: 8px;'>Name</th><th style='border: 1px solid black; padding: 8px;'>Emergency Number</th><th style='border: 1px solid black; padding: 8px;'>Destination</th><th style='border: 1px solid black; padding: 8px;'>Departure Date</th><th style='border: 1px solid black; padding: 8px;'>Boarding Time</th><th style='border: 1px solid black; padding: 8px;'>Leaving</th></tr></thead>";
            echo "<tbody>";
            foreach ($logs as $log) {
                echo "<tr>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $log["username"] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $log["serialnumber"] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $log["device_dep"] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $log["checkindate"] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $log["timein"] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $log["timeout"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            // Add button for printing receipt
            echo "<button onclick='printReceipt($listNumber)'>Print Record</button>";
            echo "</div>";
            // Reset variables for the next batch
            $logs = array();
            $batchCount = 0;
            $listNumber++;
        }
    }
} else {
    echo "0 results";
}
echo "</tbody>";
echo "</table>";

$conn->close();
?>

<script>
function showLogs(listNumber) {
    var table = document.getElementById('logs' + listNumber);
    if (table.style.display === 'none') {
        table.style.display = 'table';
    } else {
        table.style.display = 'none';
    }
}

function printReceipt(listNumber) {
    var logsTable = document.getElementById('logs' + listNumber).outerHTML;
    var title = "Binangonan Boat Station (Departure " + listNumber + ")";
    var date = new Date().toLocaleDateString();
    var time = new Date().toLocaleTimeString();
    var receiptContent = "<div style='width: 210mm; height: 297mm; border: none; background-color: white; padding: 20px;'>";
    // Logo
    receiptContent += "<img src='logo.png' alt='Logo' style='max-width: 100px; position: absolute; top: 20px; left: 20px;'>";
    // Header with title
    receiptContent += "<h1 style='text-align: center; margin-top: 20px;'>" + title + "</h1>";
    receiptContent += "<p style='text-align: center; font-size: 12px; margin-bottom: 10px;'>This is a record for Departure " + listNumber + "</p>";
    // Date and time
    receiptContent += "<div style='text-align: right; margin-bottom: 20px;'>Date: " + date + "<br>Time: " + time + "</div>";
    // List of logs (table format)
    receiptContent += logsTable;
    // Footer
    receiptContent += "<div style='text-align: center; margin-top: 20px;'>University of Rizal System (2024)</div>";
    receiptContent += "</div>";
    
    var printWindow = window.open('', '_blank', 'width=800,height=600');
    printWindow.document.open();
    printWindow.document.write(receiptContent);
    printWindow.document.close();
    printWindow.print();
}
</script>