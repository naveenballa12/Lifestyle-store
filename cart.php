<?php
 require 'common.php';
 if(!isset($_SESSION['email']))
     header('location:login.php');
 else
     $id= $_SESSION['id'];
 ?>

<!Doctype html>

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
        ?><br><br><br><br><br><br><br>
        <?php 
          $select_query="select item_id from users_items inner join users on user.$id=users_items.user_id;";
          $select_query_result= mysqli_query($select_query);
          $num_rows= mysqli_num_rows($select_query_result);
          if($num_rows==0)
              echo "Add items to the cart first!";
          else
              while()
          
        ?>
        <div class="container">
            <table class="table table-bordered" style="border-width:5px ;">
                <div class="table-responsive">
                    <tr>
                        <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                    </tr>
                </div>
                <div class="table-responsive">
                    <tr><td><br></td><td><br></td><td><br></td><td></td></tr>
                </div>
                <div class="table-responsive">
                    <tr>
                        <td></td><td>Total</td><td>Rs. 0/-</td><td><a class="btn btn-primary" href="success.html">Confirm order</a></td>
                    </tr>
                </div>
            </table>
        </div>
       
          
 
        
        <?php
         include 'footer.php';
        ?>
       
    </body>
</html>