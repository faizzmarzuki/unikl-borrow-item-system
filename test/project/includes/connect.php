<?php
session_start();
$servername = "localhost";
$server_user = "faizz";
$server_pass = "faiz";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>