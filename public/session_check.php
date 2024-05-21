<?php
// Start the session
session_start();

// Function to check if the user is logged in
function check_login() {
    // If session variable 'loggedin' is not set or is false
    if (!isset($_SESSION["name"])) {
        // Redirect to the login page
        header("Location: login_page");
        exit();
    }
    
}
?>
