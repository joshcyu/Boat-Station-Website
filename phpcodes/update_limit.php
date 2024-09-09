<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the log limit from the form
    $log_limit = $_POST["log_limit"];

    // Write the log limit to a configuration file
    $config_file = 'config.json';
    $config_data = array('log_limit' => $log_limit);
    file_put_contents($config_file, json_encode($config_data));

    // Redirect back to the form page with success message
    header("Location: updatelimit.php?success=1");
    exit();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: updatelimit.php");
    exit();
}
?>