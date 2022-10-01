<?php
 require 'common.php';
 if(!isset($_SESSION['email']))
     header('location:index.php');
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
        <br><br><br><br><br><br><br>
        <?php
        
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3" >
                    <div class="jumbotron">
                        <center>
                            <h2>Success!</h2>
                            <p>Your order is confirmed. Thank you for shopping with us.<br><a href="products.php">Click here</a> to purchase any other item.</p>
                        </center>
                    </div>
                </div>
             </div>
        </div><br><br>
       
          
 
        
        <?php
        include 'footer.php';
        ?>
       
    </body>
</html>