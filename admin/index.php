<?php
session_start();
$login = 'olesja';
$pass = 'ol2206';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
    header('location: ../login/index.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$db = 'all4garden';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>

<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адмін-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <style>
        body {
            background-color: #e5e5e5;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .logout-button {
            text-align: right;
            margin-bottom: 20px;
        }

        .table {
            margin-top: 20px;
            background-color: #FFFFFF;
            border-radius: 15px;
        }

        .add-post-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Адміністративна панель</h2>
        </div>
        <div class="col-2 logout-button">
            <a href="logout.php" class="shadowcustom btn btn-secondary">Вихід</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table  table-hover">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Назва поста</th>
                    <th scope="col">Дії</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);
                while ($post = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <th scope="row"><?=$post['id']?></th>
                        <td><?=$post['title']?></td>
                        <td><a href="edit.php?post_id=<?=$post['id']?>" class="btn btninfo">Редагувати</a></td>
                        <td><a href="delete.php?post_id=<?=$post['id'];?>" class="btn btndanger">Видалити</a></td>
                    </tr>
                <?php endwhile;?>
                </tbody>
            </table>
            <a href="add.php" class="btn btn-secondary shadowcustom add-post-button">Додати пост</a>
        </div>
    </div>
</div>
</body>
</html>
