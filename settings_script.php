<?php
require 'common.php';
if(!isset($_SESSION['email']))
    header ('location:index.php');
else
    $email=$_SESSION['email'];
$oldp=$_POST['oldpassword'];
$select_query="select password from users where email='$email';";
$select_query_result=mysqli_query($select_query);
$row=mysqli_fetch_array($select_query_result);
if($row['password'!=$oldp])
    echo "Enter correct old password";
$newp=$_POST['newpassword'];
if (strlen(newp) < 6) {
  echo "Password should have at-least 6 characters";
}
$renewp=$_POST['retype_newpassword'];
if($renewp!=$newp)
    echo 'The entered passwords don\'t match';
else{
    $update_query="update store.users set password='$newp' where email='$email';";
    $update_query_result=mysqli_query($update_query) ;
    if($update_query_result)
        echo 'update sucessful';
    else
        echo 'try again';
}
    
?>

