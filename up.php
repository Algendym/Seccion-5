<?php
include('db-config.php');

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $username  = $_POST ['username'];
    $email = $_POST ['email'];
    $phone_number = $_POST ['phone_number'];
    $update = "UPDATE users SET username='$username', email='$emaul' , image='$phone_number' WHERE id=$ID";
    mysqli_query($conn, $update);
    header('location:select.php');
}


?>