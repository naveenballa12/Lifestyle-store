<?php
require 'common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="img/download.png" rel="icon" type="image/x-icon" >
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script  src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="index.css" rel="stylesheet" type="text/css">  
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <br><br>
        
         
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" >
                    <form method="POST" action="signup_script.php">
                        <center><h3>Sign Up</h3></center>
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Contact" class="form-control" name="contact" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="City" class="form-control" name="city" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Address" class="form-control" name="address" required = "true">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
             </div>
        </div>
     ><br><br>
          
 
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
