<?php

$host = "sql100.infinityfree.com";
$user = "if0_40468236";
$pass = "xcLmZ2lz6teBI";
$dbname = "if0_40468236_project9db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
