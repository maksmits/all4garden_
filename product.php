<?php
$product_id = $_GET['id'];
if (!is_numeric($product_id)) exit();
require_once('config.php');
$sql = "SELECT * FROM products WHERE id =" .$product_id;
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <title>All4Garden | <?=$product['title']?></title>
</head>
<body>
<?php
require('./components/Header/index.php')
?>
<section class="product_container">
    <div class="single_product_card_container product_card2">
        <div>
            <img class="single_product_card_image" src="<?=$product['image']?>" alt="">
        </div>
        <div class="single_product_card_info">
            <h2 class="single_product_card_title"><?=$product['title']?></h2>
            <h3 class="single_product_card_content"><?=$product['content']?></h3>
            <a href="../all4garden.local/index.php" class="centerloc product_card_button u-border-2 u-border-black u-btn u-btn-round u-button-style u-grey-5 u-radius-17 u-btn-1 shadowcustom">На Головну</a>
        </div>
    </div>
</section>

</body>
</html>