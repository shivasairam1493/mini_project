<?php
    include("connection.php");
  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         
    </head>
    
    <body class="bdy">
         <div class="cont2">
           <div class="forms">
               <div class="form">
                  <span class="tit">Verify</span>
                 
                    <form action="display2.php" method="POST">
                      <div class="input-field">
                           <i class="uil uil-eye-slash showHideP"></i> 
                       <input type="email" placeholder="enter email address" name="mail" required>
                       <i class="fa-solid fa-envelope"></i>
                  
           </div>
                     
                       <div class="input-field">
                      
                       <input type="password" class="password" placeholder="enter password" name="pass2" required>
                      
                       <i class="fa-solid fa-eye"></i>
                       <i class="fa-solid fa-eye-slash " id="pw_hide"></i>      
                     </div>
                     
                       <div class="checkbox-text">
                          <div class="checkbox-content">
                           
                          
                          </div>
                          <a href="#" class="text"></a>
                       </div>
                       
                       
                      <div class="btn">
                      
                      <input type="submit" value="Search" name="search">
                    
                     </div>
                     
                    </form>
               </div>
           </div>
         </div>
      <script src="login.js"></script>
    </body>
</html>


<?php
   
   if(isset($_POST['search']))
     {
        $mail = $_POST['mail'];
        $pass2 = $_POST['pass2'];
 
 
        $query = "SELECT * from registration where password = '$pass2' AND email = '$mail' ";
        $data = mysqli_query($conn,$query);
 
        $result = mysqli_fetch_assoc($data);
 
        $name =$result['fullName'];
        echo $name;
     }
   
   ?>
