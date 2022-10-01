<?php
 require 'common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));
$select_query= "Select id,email_id From users Where email_id=$email AND md5(password)=$password;";
$select_query_results=mysqli_query($con,$select_query);
$number_rows=mysqli_num_row($select_query_results);
if($number_rows==0)
    echo "No user with the email and password";
else{
    $row=mysqli_fetch_array($select_query_results);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');    
}

?>

