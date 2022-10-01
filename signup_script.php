<?php
require 'common.php';
$name=$_POST['name'];
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: index.php?email_error=enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  header('location: index.php?password_error=enter correct password');
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$contact = $_POST['contact'];
$city= $_POST['city'];
$address=$_POST['address'];
$select_query="select id from users where email='$email';";
$select_query_results=mysqli_query($select_query);
$num_rows=mysqli_num_rows($select_query_results);
if($num_rows>0){
    echo "The email already exits";
}
else{
$user_registration_query = "insert into users(name, email, password,contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['id']=mysqli_insert_id($con);
$_SESSION['email']=$email;
header('location:products.php');
}
?>