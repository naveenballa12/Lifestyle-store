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
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mybar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="img/download.png" class="favi img-circle">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="mybar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                    </ul>
                </div>
            </div>    
        </nav><br><br><br>
        
         <div class="container">
            <div class="row">    
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center><h2>Login</h2></center>
                        </div>
                        <center>
                            <div class="panel-body">
                                <p>Login to make a purchase</p>
                                <form method="POST" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <p>Don't have an account?<a href="signup.html">Register</a>
                            </div>
                        </center>
                    </div>  
                </div>
            </div>  
        </div>
 
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
