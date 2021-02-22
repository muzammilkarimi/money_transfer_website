<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'makpay';

$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection Error");
}

?>