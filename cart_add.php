<?php
require 'common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET[id];
$insert_query="insert into user_items (user_id, item_id, status) Values('$user_id','$item_id','Added to cart');";
$insert_query_results=mysqli_query($con,$insert_query);
header('location:products.php');
?>

