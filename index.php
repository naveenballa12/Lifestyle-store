<?php
require 'common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
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
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h2>We sell lifestyle.</h2>
                    <p>Flat 40%OFF on premium brands</p>
                    <a href="products.html" class="btn btn-danger btn-lg-active"><strong>Shop now</strong></a>   
                </div>
                </center>
            </div>  
        </div>
        <?php
         include 'footer.php';
        ?>
            
        
    </body>
</html>
