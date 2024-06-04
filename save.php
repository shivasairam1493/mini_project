<?php

$server = "localhost";
$username = "root";
$password = ""; // Fill in your MySQL password if set.
$dbname = "mini_project";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Start

$fullName = mysqli_real_escape_string($con, $_POST['name']);
$phoneNumber = mysqli_real_escape_string($con, $_POST['phone']);
$shopName = mysqli_real_escape_string($con, $_POST['shop']);
$buildingNumber = mysqli_real_escape_string($con, $_POST['building']);
$businessType = mysqli_real_escape_string($con, $_POST['business']);
$area = mysqli_real_escape_string($con, $_POST['location']);
$landmark = mysqli_real_escape_string($con, $_POST['land']);
$email = mysqli_real_escape_string($con, $_POST['mail']);
$userPassword = mysqli_real_escape_string($con, $_POST['pass']);

$sql = "INSERT INTO registration (fullName, phoneNumber, shopName, buildingNumber, businessType, area, landmark, email, password) VALUES ('$fullName', '$phoneNumber', '$shopName', '$buildingNumber', '$businessType', '$area', '$landmark', '$email', '$userPassword')";

if (mysqli_query($con, $sql)) {
    echo "Data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>
