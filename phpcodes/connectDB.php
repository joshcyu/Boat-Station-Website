<?php
/* Database connection settings */
	$servername = "mysql5026.site4now.net";
    $username = "aa376f_dabase";		//put your phpmyadmin username.(default is "root")
    $password = "Zenintoji03";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "db_aa376f_dabase";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>