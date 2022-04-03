<?php
session_start();
?>

<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細</title>
    <link rel="stylesheet" href="style.css">
    <style>
        p {color: #000;}
    </style>
</head>

<body>
<header>
        <div class="title">
            <li><a href="../seisaku.php">幻憩</a></li>
        </div>

        <nav>
            <ul><li><?php
            if(!(session_status() == PHP_SESSION_NONE)) {
            if (isset($_SESSION['name'])) {?>
            <p class="loginname"><?php echo "ログイン中 :",$_SESSION['name'];
            }
            }?></p></li>      
            <li><a href="bbs3.php">投稿フォーム</a></li>   
            <li><a href="member/entry.php">新規登録</a></li>
            <li><a href="../login.php">ログイン</a></li>
            <li><a href="../logout.php">ログアウト</a></li>
            </ul>
        </nav>
    </header>

<main>
    <div class="container">
        <p><?php echo '<img class="pic" src="images_after/' . $_GET['gazou'] .'">'  ?></p>
        <section>
            <h1>タイトル</h1>
            <p><?php echo $_GET['title'] ?></p>
        </section>
        <section>
        <h1>コメント</h1>
            <p><?php echo $_GET['comment'] ?></p>
        </section>
        <section>
            <h1>ユーザーネーム</h3>
            <p><?php echo $_GET['name'] ?></p>
        </section>
    </div>
</main>

</body>

</html>