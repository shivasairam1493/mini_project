<?php
    // Include the connection file
    include("connection.php");

    // Check if the search form is submitted
    if(isset($_POST['search'])) {
        // Sanitize input to prevent SQL injection
        $mail = mysqli_real_escape_string($conn, $_POST['mail']);
        $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);

        // Construct the SQL query
        $query = "SELECT * FROM registration WHERE email = '$mail' AND password = '$pass2'";
        
        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if any results are found
        if(mysqli_num_rows($result) > 0) {
            // Fetch all rows as an associative array
            $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            $pizzas = [];
            echo "No results found for your search"; // No results found
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
   
</head>
<body>
    
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza): ?>
            
                <div class="col-md-3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                           
                            <h5>YOUR NAME: <?php echo htmlspecialchars($pizza['fullName']); ?></h5>
                            <h5>PHONE NUMBER: <div><?php echo htmlspecialchars($pizza['phoneNumber']); ?></div></h5>
                            <h5>SHOP NAME: <div><?php echo htmlspecialchars($pizza['shopName']); ?></div></h5>
                            <h5>BUILDING NUMBER: <div><?php echo htmlspecialchars($pizza['buildingNumber']); ?></div></h5>
                            <h5>BUSINESS TYPE: <div><?php echo htmlspecialchars($pizza['businessType']); ?></div></h5>
                            <h5>AREA : <div><?php echo htmlspecialchars($pizza['area']); ?></div></h5>
                            <h5>LANDMARK : <div><?php echo htmlspecialchars($pizza['landmark']); ?></div></h5>
                            <h5>EMAIL ADDRESS: <div><?php echo htmlspecialchars($pizza['email']); ?></div></h5>
                            <h5>PASSWORD : <div><?php echo htmlspecialchars($pizza['password']); ?></div></h5>

                            <?php echo "-------------------------------------------------------"; ?>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
