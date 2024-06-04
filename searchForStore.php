<?php
    include("connection.php");
  
?>
  <!DOCTYPE html>
  <html>
   <head>
     <title>Search nearest store</title>
     <link rel="stylesheet" href="style.css">
     
   </head>
   <body class="a">
     <div class="con">
        <div class="title">SEARCH FOR YOUR REQUIRED ONE</div>
         <form action="display.php" method="POST">
           <div class="user-details">
          
              <div class="input-box">
               <span class="details">select business type</span>
                 <select id="id1" name="business">
                  <option selected disabled>Select an option</option>
                   <option value="t1">t1</option>
                   <option value="t2">t2</option>
                   <option value="t3">t3</option>
                  <option value="t4">t4</option>
                </select>
             </div>
                
              <div class="input-box">
               <span class="details">select your area</span>
                 <select id="id2" name="location">
                  <option selected disabled>Select an option</option>
                   <option id="check" value="A1">A1</option>
                   <option value="A2">A2</option>
                   <option value="A3">A3</option>
                  <option value="A4">A4</option>
              </select>
        
             </div>
                
           </div>
           <div class="button">
           <input id="identify" type="submit" value="Search" name="search">
           
           </div>
           
       
     </div>
         </form>
     
     </div>
   </body>
  </html>

  <?php
   
  if(isset($_POST['search']))
    {
       $business = $_POST['business'];
       $location = $_POST['location'];


       $query = "SELECT * from registration where businessType = '$business' AND area = '$location' ";
       $data = mysqli_query($conn,$query);

       $result = mysqli_fetch_assoc($data);

       $name =$result['fullName'];
       echo $name;
    }
  
  ?>

