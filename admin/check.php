<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'all4garden';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
$categoryID = $_POST['category'];
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];
$price = $_POST['price'];




mysqli_query($conn, "INSERT INTO `products` (`id`, `title` , `image`, `content`,`price`, `categoryID`) VALUES (NULL, '$title','$image', '$content','$price', '$categoryID')");
header('Location: index.php');