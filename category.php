<?php
require('components/Header/index.php');
$category_id = $_GET['id'];
require_once('config.php');
$sql = "SELECT * FROM products WHERE categoryID =" .$category_id;
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>All4Garden</title>
</head>
<body>
<h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1 textindex2 textindex">Список продаж</h1>
<p class="u-text u-text-2 textindex">У наявності може бути більше різного товару ніж наведено нижче.</p>
<section class="category_container">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Замовлення.css" media="screen">
    <script class="u-script" type="text/javascript" src="css/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="css/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
    <link rel="icon" href="images/favicon.ico">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">

    <?php foreach ($result as $product):?>
        <div class="product_card">
            <div class="product_card_info">
                <img src="<?=$product['image']?>" class="product_card_image" alt="<?=$product['title']?>">
                <p class="fz24 u-custom-font u-font-oswald u-text u-text-3"><?=$product['title']?></p>
            </div>
            <div class="product_card_buttons">
                <a href="product.php?id=<?=$product['id']?>" class="product_card_button u-border-2 u-border-black u-btn u-btn-round u-button-style u-grey-5 u-radius-17 u-btn-1 .u-btn shadowcustom">Читати більше</a>
                <p class="price u-text u-text-palette-3-base u-text-8"><?=$product['price']?> UAH</p>
            </div>
        </div>
    <?php endforeach;?>

</section>
</body>
</html>
    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 35px; bottom: 60px; padding: 12px; background-image: none;" class="u-back-to-top u-grey-90 u-icon u-icon-rounded u-opacity u-opacity-85 u-radius-14" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
<?php
require('./components/Footer/footer.php')
?>