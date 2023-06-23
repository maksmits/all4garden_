<header class="header_wrapper">
    <nav class="header_container">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/nicepage.css" media="screen">
        <link rel="stylesheet" href="css/Замовлення.css" media="screen">
        <script class="u-script" type="text/javascript" src="css/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="css/nicepage.js" defer=""></script>
        <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
        <link rel="icon" href="images/favicon.ico">
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <style>
            .logo{
                font-family: Comforter;
                font-size: 48px;

            }
        </style>
        <a href="index.php" class="logo">
            All4Garden
        </a>
        <ul class="nav_items">
            <?php
            require_once('config.php');
            $sql = "SELECT * FROM menu";
            $result = mysqli_query($conn, $sql);
            ?>
            <?php foreach ($result as $menu):?>
                <li>
                    <a class="nav-link navig" href="category.php?id=<?=$menu['categoryID']?>"><?=$menu['title']?></a>
                </li>
            <?php endforeach;?>
        </ul>
        <div class="">
            <a href="login/index.php" class=" product_card_button u-border-2 u-border-black u-btn u-btn-round u-button-style u-grey-5 u-radius-17 u-btn-1 " id="login">
                Вхід
            </a>
        </div>
    </nav>
</header>

