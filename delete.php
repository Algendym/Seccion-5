<?php
include("db-config.php");

$ID = $_GET['id'];
mysqli_query($conn , "DELETE FROM users WHERE id= $ID");
header('location:select.php');



?>