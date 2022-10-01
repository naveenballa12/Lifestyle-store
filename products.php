<?php
 require 'common.php';
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
         include 'check_if_added.php';
        ?>
        <br><br><br>
        
        <div class="container">
            <div class="jumbotron">
                <center>
                <h2>Welcome to our Lifestyle Store!</h2>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </center>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="camera1">
                        <div class="caption text-center" >
                            <h3>Cannon Eos</h3>
                            <p>Price: Rs.36000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail" >
                        <img src="img/2.jpg" alt="camera2">
                        <div class="caption text-center" >
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs.40,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="camera3">
                        <div class="caption text-center" >
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs.50,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="camera4">
                        <div class="caption text-center">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs.86,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"class ="text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="watch1">
                        <div class="caption text-center" >
                            <h3>Titan Model#301</h3>
                            <p>Price: Rs.13,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail" >
                        <img src="img/10.jpg" alt="watch2">
                        <div class="caption text-center" >
                            <h3>Titan Model#201</h3>
                            <p>Price: Rs.3,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt="watch3">
                        <div class="caption text-center" >
                            <h3>HMT Milan</h3>
                            <p>Price: Rs.8,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="watch4">
                        <div class="caption text-center">
                            <h3>Faber Luba#111</h3>
                            <p>Price: Rs.18,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"class="text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/8.jpg" alt="shirt1">
                        <div class="caption text-center" >
                            <h3>H&W</h3>
                            <p>Price: Rs.800.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail" >
                        <img src="img/6.jpg" alt="shirt2">
                        <div class="caption text-center" >
                            <h3>Luis Phil</h3>
                            <p>Price: Rs.1,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt="shirt3">
                        <div class="caption text-center" >
                            <h3>John Zok</h3>
                            <p>Price: Rs.1,500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="shirt4">
                        <div class="caption text-center">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs.1,300.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                               Now</a></p>
                                <?php
                                } else {
                                //We have created a function to check whether this particular product is added
                               //to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=
                               //0)
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                               cart</a>';
                                } else {
                                ?>
                               <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
                               btn-primary">Add to cart</a>
                                   <?php
                                   }
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
          
 
        <?php
         include 'footer.php';
        ?>
    </body>
</html>