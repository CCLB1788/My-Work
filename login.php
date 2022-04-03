<?php
session_start();//セッション開始
print_r($_POST);
if (isset($_SESSION['id'])){
    header('Location: seisaku.php');

}else if (isset($_POST['name']) && isset($_POST ['password'])){
    //データベースに接続
    $dsn = 'mysql:host=localhost;dbname=hitokoto;charset=utf8';
    $user = 'hitokotouser';
    $password = 'password';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        //Prepared Statement-SQL文の特定の箇所を変数のように後から変更できる状態
        $stmt = $db->prepare("SELECT * FROM member WHERE username=:username AND password=:pass");

        //パラメーターを割り当てている
        $stmt->bindParam(':username', $_POST['name'], PDO::PARAM_STR);
        //$stmt->bindParam(':pass', hash("sha256",$_POST['password'],PDO::PARAM_STR);
        $stmt->bindParam(':pass', $_POST['password'], PDO::PARAM_STR);
        //実際のクエリを実行している
        $stmt->execute();


        if ($row = $stmt->fetch()){
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['username'];
            header('location: seisaku.php');
            exit();
            //該当のデータが無かった場合、戻ってくる
        } else {
            print_r("テスト");
            header('location: login.php');
            exit();
        }
        //例外処理-データベースにエラーが起きた場合
    } catch (PDOExeption $e) {
        exit ('エラー:' . $e->getMessage());
    }

} 

?>

<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="seisaku.css"> 
    <link rel="stylesheet" href="login.css"> 
</head>

<body>
<header>
        <div class="title">
            <li><a href="seisaku.php">幻憩</a></li>
        </div>

        <nav>
            <ul><li><?php
            if(!(session_status() == PHP_SESSION_NONE)) {
            if (isset($_SESSION['name'])) {?>
            <p class="loginname"><?php echo "ログイン中 :",$_SESSION['name'];
            }
            }?></p></li>      
            <li><a href="bbs/bbs3.php">投稿フォーム</a></li>   
            <li><a href="member/entry.php">新規登録</a></li>
            <li><a href="login.php">ログイン</a></li>
            <li><a href="logout.php">ログアウト</a></li>
            </ul>
        </nav>
</header>

<form action="login.php" method="POST" name="login_form">
    <div class="login_form_top">
        <h1>LOGIN</h1>
        <p>NAME、Passwordをご入力の上、「LOGIN」ボタンをクリックしてください。</p>
    </div>
    <div class="login_form_btm">
        <input type="id" name="name" placeholder="name">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="botton" value="LOGIN">
    </div>    
</form>

<div class="FooterSection">
        <div class="Footer">
            <div class="Footer-Inner">
                <div class="Footer-Inner-List">
                    <a href="../mail/mail_form.html" class="Footer-Inner-List-Item">お問い合わせ</a>
                    <a href="term.php" class="Footer-Inner-List-Item">利用規約</a>
                    <a href="privacypolicy.php" class="Footer-Inner-List-Item">プライバシーポリシー</a>
                </div>
                <div class="Footer-Inner-CopyRight">
                    ©2021 幻憩
                </div>
            </div>
        </div>
    </div>

</body>
</html>