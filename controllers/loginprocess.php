<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekenedrinks_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Perform login verification (query database, compare credentials, etc.)
    // ...

    // Display SweetAlert welcome message
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>';
    echo '<script>
          Swal.fire({
            icon: "success",
            title: "Welcome!",
            text: "Welcome back, ' . $email . '!",
          });
          </script>';
}

// Close the database connection
$conn->close();
?>
