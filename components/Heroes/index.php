<main>
    <section class="hero_container">
        <?php
        require_once('config.php');
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        ?>
        <link rel="stylesheet" href="css/nicepage.css" media="screen">
        <link rel="stylesheet" href="css/Замовлення.css" media="screen">
        <script class="u-script" type="text/javascript" src="css/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="css/nicepage.js" defer=""></script>
        <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
        <link rel="icon" href="images/favicon.ico">
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
        <h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1 textindex2 textindex">Список продаж</h1>
        <p class="u-text u-text-2 textindex">У наявності може бути більше різного товару ніж наведено нижче.</p>
        <div class="product_cards">
            <?php foreach ($result as $product):?>
                <div class="product_card ">
                    <div class="product_card_info">
                        <img src="<?=$product['image']?>" class="product_card_image" alt="<?=$product['title']?>">
                        <p class="fz24 u-custom-font u-font-oswald u-text u-text-3"> <?=$product['title']?></p>
                    </div>
                    <div class="product_card_buttons">
                        <a href="product.php?id=<?=$product['id']?>" class="product_card_button u-border-2 u-border-black u-btn u-btn-round u-button-style u-grey-5 u-radius-17 u-btn-1 shadowcustom" >Читати більше</a>
                        <p class="price u-text u-text-palette-3-base u-text-8"><?=$product['price']?> UAH</p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>
</main>