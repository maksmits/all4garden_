<?php
$servername = "sql202.infinityfree.com";
$username = "if0_34466797";
$password = "CX70gpkOIyOiTh";
$db = 'if0_34466797_all4garden';
$conn = mysqli_connect ($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" .mysqli_connect_error());
}