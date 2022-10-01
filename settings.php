<?php
require 'common.php';
if(!isset($_SESSION['email']))
    header ('location:index.php');
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
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" >
                    <form class="form-group" method="POST" action="settings_script.php">
                        <h3>Change Password</h3>
                        <div>
                            <input type="text" placeholder="Old Password" class="form-control" name="oldpassword" required="true">
                        </div><br>
                        <div >
                            <input type="text" placeholder="New Password" class="form-control" name="newpassword" required="true" pattern=".{6,}">
                        </div><br>
                        <div >
                            <input type="text" placeholder="Re-type New Password" class="form-control" name="retype_newpassword" required="true">
                        </div><br>
                        <button type="submit" class="btn btn-primary btn-block">Change</button>
                    </form>
                </div>
             </div>
        </div>
       
          
 
        
        <?php
        include 'footer.php';
        ?>
       
    </body>
</html>