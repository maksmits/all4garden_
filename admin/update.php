<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'all4garden';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$image = mysqli_real_escape_string($conn, $_POST['image']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

$query = "UPDATE `products` SET `title` = '$title', `image` = '$image', `content` = '$content', `price` = '$price', `categoryID` = '$category' WHERE `id` = '$id'";

mysqli_query($conn, $query);
header('Location: index.php');
