<?php
include("config/db.php");
?>
<!DOCTYPE html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    

<body>


    <div class="box">

    <img src="user.png" class="user">

        <h1>ADMIN Login Here</h1>

        <form name="myform"  action="#" method="POST" >

            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username " required="">

            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" required="">
<?php

?>

            <a href="dashboard.php" class="btn btn-primary">login</a>

            <br><br>
           
            
        </form>
        
    </div>


</body>
</html>
