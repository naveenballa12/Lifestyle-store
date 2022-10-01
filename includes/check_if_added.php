<?php
require 'common.php';
function check_if_added_to_cart($item_id){
   $user_id = $_SESSION['id'];
   $select_query="Select * From user_items where item_id='$item_id' AND user_id='$user_id' AND stauts = 'Added to cart';";
   $select_query_results= mysqli_query($con, $select_query);
   if(mysqli_num_rows($select_query_results)>=1)
       return 1;
   else
       return 0;
}
?>