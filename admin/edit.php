<?php
session_start();
$login = 'olesja';
$pass = 'ol2206';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass) {
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
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редагування поста</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Редагування поста</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
            $post_id = $_GET['post_id'];
            $sql = "SELECT * FROM products WHERE id =" .$post_id;;
            $result = mysqli_query($conn, $sql);
            $post = mysqli_fetch_assoc($result);
            ?>
            <form action="update.php" method="post"
                  enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id"
                       value="<?=$post['id']?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Вкажіть назву поста</label><br>
                    <input name="title" type="text" class="formcontrol" id="exampleFormControlInput1" value="<?=$post['title']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть зображення для поста</label><br>
                    <input name="image" type="text" class="formcontrol" id="exampleFormControlInput1" value="<?=$post['image']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Вкажіть опис
                        поста</label>
                    <textarea name="content" class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="6"><?=$post['content']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть вартість</label><br>
                    <input name="price" type="text" class="formcontrol" id="exampleFormControlInput1" value="<?=$post['price']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Категорія(1-Листяні; 2-Хвойні; 3-Плодові)</label><br>
                    <input name="category" type="text" class="formcontrol" id="exampleFormControlInput1" value="<?=$post['categoryID']?>">
                </div>
                <button type="submit" class="shadowcustom btn btn-secondary">Обновити
                    пост</button>
                <a href="../admin/index.php" class="shadowcustom btn btn-secondary">Назад</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
