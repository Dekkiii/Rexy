<?php
// Start the session
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rexy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if(isset($_POST['send'])) {
    // Get user input
    $name = $_POST['name'];
    $department = $_POST['department'];
    
    // Get user IP address
    $ip = $_SERVER['REMOTE_ADDR'];
    
    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO logins (name, department, ip_address) VALUES ('$name', '$department', '$ip')";
  
    if ($conn->query($sql) === TRUE) {
        // Data insertion successful
        $_SESSION["loggedin"] = true; // Set session variable
        $_SESSION["name"] = $name;
        
        // Redirect to home_view
        header("Location: home_view");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close database connection
    $conn->close();
}
?>
