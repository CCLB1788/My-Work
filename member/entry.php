<?php 
require("./dbconnect.php");
session_start();

if (!empty($_POST)) {
    /* 入力情報の不備を検知 */
    if ($_POST['email'] === "") {
        $error['email'] = "blank";
    }
    if ($_POST['password'] === "") {
        $error['password'] = "blank";
    }
    
    /* メールアドレスの重複を検知 */
    if (!isset($error)) {
        $member = $db->prepare('SELECT COUNT(*) as cnt FROM members WHERE email=?');
        $member->execute(array(
            $_POST['email']
        ));
        $record = $member->fetch();
        if ($record['cnt'] > 0) {
            $error['email'] = 'duplicate';
        }
    }

    /* エラーがなければ次のページへ */
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
        header('Location: check.php');   // check.phpへ移動
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>アカウント作成</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
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
            <li><a href="../bbs/bbs3.php">投稿フォーム</a></li>   
            <li><a href="entry.php">新規登録</a></li>
            <li><a href="../login.php">ログイン</a></li>
            <li><a href="../logout.php">ログアウト</a></li>
            </ul>
        </nav>
</header>
    
<div class="content">
        <form action="" method="POST">
            <h1>アカウント作成</h1>
            <p>当サービスをご利用するために、次のフォームに必要事項をご記入ください。</p>
            <br>

            <div class="control">
                <label for="name">ユーザー名</label>
                <input id="name" type="text" name="name">
            </div>

            <div class="control">
                <label for="email">メールアドレス<span class="required">必須</span></label>
                <input id="email" type="email" name="email">
                <?php if (!empty($error["email"]) && $error['email'] === 'blank'): ?>
                    <p class="error">＊メールアドレスを入力してください</p>
                <?php elseif (!empty($error["email"]) && $error['email'] === 'duplicate'): ?>
                    <p class="error">＊このメールアドレスはすでに登録済みです</p>
                <?php endif ?>
            </div>

            <div class="control">
                <label for="password">パスワード<span class="required">必須</span></label>
                <input id="password" type="password" name="password">
                <?php if (!empty($error["password"]) && $error['password'] === 'blank'): ?>
                    <p class="error">＊パスワードを入力してください</p>
                <?php endif ?>
            </div>

            <div class="control">
                <button type="submit" class="btn">確認する</button>
            </div>
        </form>
</div>

<div class="FooterSection">
        <div class="Footer">
            <div class="Footer-Inner">
                <div class="Footer-Inner-List">
                    <a href="" class="Footer-Inner-List-Item">お問い合わせ</a>
                    <a href="" class="Footer-Inner-List-Item">プライバシーポリシー</a>
                    <a href="" class="Footer-Inner-List-Item">利用規約</a>
                </div>
                <div class="Footer-Inner-CopyRight">
                    ©2021 幻憩
                </div>
            </div>
        </div>
</div>

</body>
</html>