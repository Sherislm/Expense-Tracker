<?php 

$server = "sql304.iceiy.com";
$user = "icei_30685542";
$password = "BNdBlrKjtbq";
$database = "icei_30685542_ExpenseTracker";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("<script>alert('Connection Failed.')</script>");
}

?>