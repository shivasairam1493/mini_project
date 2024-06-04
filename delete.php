<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $id1 = mysqli_real_escape_string($conn, $_POST['e']); 
    $id2 = mysqli_real_escape_string($conn, $_POST['p']); 

    $query = "DELETE FROM `registration` WHERE email='$id1' AND password='$id2'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "Your profile is deleted successfully. check once";
    } else {
        echo "email or password is not matched: " . mysqli_error($conn); // Display MySQL error if query fails
    }
}

mysqli_close($conn); // Close the database connection
?>
