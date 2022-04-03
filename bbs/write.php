<?php
  // データの受け取り
  $name = $_POST['name'];
  $title = $_POST['title'];
  $comment = $_POST['comment'];
  //$body = $_POST['body'];
  $pass = $_POST['pass'];

// （4）input="file"でpost送信された情報の受け取り
if(!empty($_FILES)){

// ファイル名を取得
$filename = $_FILES['upload_image']['name'];

//move_uploaded_file（第1引数：ファイル名,第2引数：格納後のディレクトリ/ファイル名）
// 第2引数に使う部分
$uploaded_path = 'images_after/'.$filename;
//echo $uploaded_path.'<br>';

$result = move_uploaded_file($_FILES['upload_image']['tmp_name'],$uploaded_path);
var_dump($filename);

if($result){
  $MSG = 'アップロード成功！ファイル名：'.$filename;
  $img_path = $uploaded_path;
}else{
  $MSG = 'アップロード失敗！エラーコード：'.$_FILES['upload_image']['error'];
}

}else{
  $MSG = '画像を選択してください';
}


var_dump($name,$comment,$pass); 
  // 必須項目チェック（名前か本文が空ではないか？）
  if ($name == '' ){
    header("Location: bbs3.php");  // 空のときbbs.phpへ移動
    exit();
  }

  // 必須項目チェック（パスワードは４桁の数字か？
  if (!preg_match("/^[0-9]{4}$/", $pass)){
    header("Location: bbs3.php");  // 書式が違うときbbs.phpへ移動
    exit();
  }

  // DBに接続
  $dsn = 'mysql:host=localhost;dbname=hitokoto;charset=utf8';
  $user = 'hitokotouser';
  $password = 'password'; // tennisuserに設定したパスワード
  

  try {
    // PDOインスタンスの作成
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアドステートメントを作成
    $stmt = $db->prepare("
      INSERT INTO bbs (name, title, comment, date, password, gazou)
      VALUES (:name, :title, :comment, now(), :pass, :gazou)"
    );
    var_dump($stmt);
    // プリペアドステートメントにパラメータを割り当てる
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    //$stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->bindParam(':gazou', $filename, PDO::PARAM_STR);
    // クエリの実行x
    $stmt->execute();

    //bbs3.phpに戻る
    header("Location: bbs3.php");
    exit();
  } catch (PDOException $e){
    exit('エラー：' . $e->getMessage());
  }
?>
