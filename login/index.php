<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <title>Увійти</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <form action="checklogin.php" class="form" method="post">
            <h2>Вхід доступний лише Адміністратору!</h2>
            <div class="form_container">
                <input type="text" name="login" placeholder="Введіть логін">
                <input type="password" name="password" placeholder="Введіть пароль">
                <button class="button">Увійти</button>
                <a href="../index.php" class="button link">На Головну</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
