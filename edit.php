<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$mail = $_POST['mail'];
$pass3 = $_POST['pass3'];
$attribute = $_POST['attribute'];
$new_value = $_POST['new_value'];

// Update database entry
$sql = "UPDATE registration SET $attribute = '$new_value' WHERE email = '$mail' AND password = '$pass3'";

          //
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>
