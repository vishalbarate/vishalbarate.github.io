<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'contact_table');

extract($_POST);
if(isset($_POST['submit'])){
    $q = "insert into contact (name,email,phonenumber,subject,message) value ('$name','$email','$phonenumber','$subject','$message')";

    $query = mysqli_query($con,$q);
    header('location:contact.php');
}
?>