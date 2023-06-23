<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'all4garden';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
$post_id = $_GET['post_id'];
mysqli_query($conn, "DELETE FROM products WHERE `products`.`id` = '$post_id'");
header("Location: index.php");
