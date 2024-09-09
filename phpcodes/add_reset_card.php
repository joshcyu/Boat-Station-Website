<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if card UID is set and not empty
    if (isset($_POST['card_uid']) && !empty($_POST['card_uid'])) {
        $card_uid = $_POST['card_uid'];
        
        // Read the existing reset card UIDs from the JSON file
        $file = 'reset_card_uids.json';
        $reset_cards = json_decode(file_get_contents($file), true);
        
        // Add the new reset card UID to the array
        $reset_cards[] = $card_uid;
        
        // Write the updated array back to the JSON file
        file_put_contents($file, json_encode($reset_cards));
        
        // Redirect to the new HTML page with success message
        header("location: reset_card_added.php");
        exit();
    } else {
        echo "Card UID is required";
    }
}
?>