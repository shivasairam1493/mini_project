<?php
    // Include the connection file
    include("connection.php");

    // Check if the search form is submitted
    if(isset($_POST['search'])) {
        // Sanitize input to prevent SQL injection
        $business = mysqli_real_escape_string($conn, $_POST['business']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $n = 5;
        $text = "-----------------------------------------------------------------------------------------------MATCHED DETAILS ARE-------------------------------------------------------------------------------------------------------  ";

        // Construct the SQL query
        $query = "SELECT * FROM registration WHERE businessType = '$business' AND area = '$location'";
        
        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if any results are found
        if(mysqli_num_rows($result) > 0) {
            // Fetch all rows as an associative array
            echo str_repeat(" ", $n) . $text;
            $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            $pizzas = []; 
            echo "no results found";// No results found
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Search</title>
    <!-- Add any CSS or Bootstrap link here -->
</head>
<body>
    
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza): ?>
            
                <div class="col-md-3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <!-- Display each field of the database record -->
                            <h5>OWNER NAME :</br>  <div><?php echo htmlspecialchars($pizza['fullName']); ?></div></h5>
                            <h5>PHONE NUMBER : </br> </br><div><?php echo htmlspecialchars($pizza['phoneNumber']); ?></div></h5>
                            <h5>SHOP NAME : </br></br><div><?php echo htmlspecialchars($pizza['shopName']); ?></div></h5>
                            <h5>BUILDING NUMBER :</br></br> <div><?php echo htmlspecialchars($pizza['buildingNumber']); ?></div></h5>
                            <h5>BUSINESS TYPE :</br></br> <div><?php echo htmlspecialchars($pizza['businessType']); ?></div></h5>
                            <h5>AREA :</br></br> <div><?php echo htmlspecialchars($pizza['area']); ?></div></h5>
                            <h5>LANDMARK : </br></br><div><?php echo htmlspecialchars($pizza['landmark']); ?></div></h5>
                            <h5>EMAIL ADDRESS :</br></br> <div><?php echo htmlspecialchars($pizza['email']); ?></div></h5>
                            <?php echo "-------------------------------------------------------"; ?>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
