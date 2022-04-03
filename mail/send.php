<?php
ini_set( 'display_errors', 1 );
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require('./src/PHPMailer.php');
require('./src/Exception.php');
require('./src/SMTP.php');
// 値の受け取り
//var_dump($_POST['name']);
//var_dump($_POST['email']);
//var_dump($_POST['contents']);

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$subject = $_POST['subject'];
$contents = $_POST['contents'];

// メール内容
$mail_body = '<h1>' .$name. 'さん</h1><br>
              <p>お問い合わせ内容はこちらです。</p>
              <p>メールアドレス：' .$email. '</p>
              <p>電話番号：' .$phonenumber. '</p>
              <p>件名：' .$subject. '</p>
              <p>お問い合わせ内容：' .$contents. '</p>';
            
//言語、内部エンコーディングを指定
mb_language("japanese");
mb_internal_encoding("UTF-8");
// インスタンスを生成（引数に true を指定して例外 Exception を有効に）
$mail = new PHPMailer(true);
//日本語用設定
$mail->CharSet = 'UTF-8'; //文字化け防止
//エラーメッセージ用言語ファイルを使用する場合に指定 調査が必要なので一時保留20211213
//$mail->setLanguage('ja', 'vendor/phpmailer/phpmailer/language/');

try {
    //サーバの設定
    $mail->SMTPDebug = 0;  // デバッグの出力を有効に（テスト環境での検証用）
    $mail->isSMTP();   // SMTP を使用
    $mail->Host       = 'smtp.mailtrap.io';  // SMTP サーバーを指定
    $mail->SMTPAuth   = true;   // SMTP authentication を有効に
    $mail->Username   = '0340b080270f45';  // SMTP ユーザ名
    $mail->Password   = 'f150d02faeb5b5';  // SMTP パスワード
    $mail->SMTPSecure = 'tls';  // 暗号化を有効に
    $mail->Port       = 2525;  // TCP ポートを指定
    //受信者設定
    //※名前などに日本語を使う場合は文字エンコーディングを変換
    //差出人アドレス, 差出人名
    $mail->setFrom('from@example.com', 'ユアサのお問い合わせフォーム');
    //受信者アドレス, 受信者名（受信者名はオプション）
    $mail->addAddress($email, $name);
    //コンテンツ設定
    $mail->isHTML(true);   // HTML形式を指定
    //メール表題（文字エンコーディングを変換）
    $mail->Subject = mb_encode_mimeheader('お問い合わせフォームのメールです。', 'ISO-2022-JP');
    //HTML形式の本文（文字エンコーディングを変換）
    $mail->Body  = $mail_body;
    $mail->send();  //送信
    //ession_destroy(); 
} catch (Exception $e) {
    //エラーが発生した場合
    exit;
}
?>
<!DOCTYPE>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム 完了画面</title>
    <link href="sample.css" rel="stylesheet">
</head>
<body>
<h1>お問い合わせフォーム</h1>
<div>
        <h3>送信完了!</h3>
        <p>お問い合わせいただきありがとうございます。</p>
        <p>送信完了いたしました。</p>
</div>
</body>
</html>