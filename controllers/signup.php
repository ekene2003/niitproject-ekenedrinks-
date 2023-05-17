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
if (isset($_POST['firstname'],$_POST['lastname'],$_POST['username'], $_POST['email'], $_POST['password'], $_FILES['image'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = crypt($password, "p55w0rd");
    $image = $_FILES['image']['name'];
    $targetDir = "uploads/"; // Directory to store the uploaded images
    $targetFilePath = $targetDir . $image;

    // Save the image to the specified directory
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
    // SQL statement to insert the data into the table
    $sql = "INSERT INTO users (firstname,lastname, email,username,password, image) VALUES ('$firstname','$lastname', '$email','$username', '$password', '$image')";
    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Display SweetAlert welcome message
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>';
        echo '<script>
        Swal.fire({
        icon: "success",
        title: "Welcome!",
        text: "Welcome, ' . $username . '! Thank you for signing up.",
        });
        </script>';
        } else {
        echo "Error inserting data: " . $conn->error;
        }
        }
        
        // Close the database connection
        $conn->close();
        ?>
