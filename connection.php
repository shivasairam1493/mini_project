<?php 
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mini_project";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
         //echo "connection ok";

    }

     else
     {
        echo "connectionn failed";
     }

?>