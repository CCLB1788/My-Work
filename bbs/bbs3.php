<?php 
session_start();
//ob_start();
              //var_dump('bbs3.php');
              //$dump = ob_get_contents();
              //ob_end_clean();
              //file_put_contents('logfile.text', $dump,FILE_APPEND);
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
  //include 'includes/login.php';
  // 1ページに表示される書き込みの数
  $num = 10;
  // 
  $count = 0;
  // DBに接続
  $dsn = 'mysql:host=localhost;dbname=hitokoto;charset=utf8';
  $user = 'hitokotouser';
  $password = 'password';

  // GETメソッドで2ページ目以降が指定されているとき
  $page = 1;
  if (isset($_GET['page']) && $_GET['page'] > 1){
    $page = intval($_GET['page']);
  }

  try {
    // PDOインスタンスの生成
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアドステートメントを作成
    $stmt = $db->prepare("SELECT * FROM bbs ORDER BY date DESC LIMIT :page, :num");
    // デバック　エラー表示
    print_r($db->errorInfo());

    // パラメータを割り当て
    $page = ($page-1) * $num;
    $stmt->bindParam(':page', $page, PDO::PARAM_INT);
    $stmt->bindParam(':num', $num, PDO::PARAM_INT);
    
    // クエリの実行
    $stmt->execute();
  } catch (PDOException $e){
    exit("エラー：" . $e->getMessage());
  }
?>

<!doctype html>
<html lang="ja" >
  <head>
    <title>画像投稿</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
              //ob_start();
              //var_dump('bbs3.php',$_SESSION['name']);
              //$dump = ob_get_contents();
              //ob_end_clean();
              //file_put_contents('logfile.text', $dump,FILE_APPEND);
            if (isset($_SESSION['name'])) {?>
            <p class="loginname"><?php echo "ログイン中 :",$_SESSION['name'];
            }
            }?></p></li>    
            <li><a href="bbs3.php">掲示板</a></li>   
            <li><a href="../member/entry.php">新規登録</a></li>
            <li><a href="../login.php">ログイン</a></li>
            <li><a href="../logout.php">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->

        <h1>投稿フォーム</h1>

        <form action="write.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>タイトル</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>コメント</label>
            <input type="text" name="comment" class="form-control">
          </div>
          <div class="form-group">
            <label>名前</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>画像</label>
          <input type="file" name="upload_image">         
          </div>
          <div class="form-group">
            <label>削除パスワード（数字４桁）</label>
            <input type="text" name="pass" class="form-control">
          </div>
          <input type="submit" class="btn btn-primary" value="書き込む">
        </form>
        <hr>
<div class="row">
<?php while ($row = $stmt->fetch()): ?>
  
  <!--<div class="col-3">-->
    <!--<div class="card" style="width: 20rem;">-->
    <div class="card col-3" >
      <?php echo '<img src="images_after/' . $row['gazou'] .'">'  ?>
      <div class="card-body">
      
        <p class="card-text"><?php echo $row['name'] ?></p>
    
        <a href="detail.php?name=<?php echo $row['name']?>&gazou=<?php echo $row['gazou']?>&title=<?php echo $row['title']?> &comment=<?php echo $row['comment']?>" class="btn btn-primary">詳細を見る</a>

      </div>
    </div>      
  <!--</div>-->

  <hr>
<?php endwhile; ?>
</div> <!--row -->

<?php
  // ページ数の表示
  try {
    // プリペアドステートメントの作成
    $stmt = $db->prepare("SELECT COUNT(*) FROM bbs");
    // クエリの実行
    $stmt->execute();
  } catch (PDOException $e){
    exit("エラー：" . $e->getMessage());
  }

  // 書き込みの件数を取得
  $comments = $stmt->fetchColumn();
  //var_dump($comments);
  // ページ数を計算
  $max_page = ceil($comments / $num);
  // ページングの必要性があれば表示
  if ($max_page >= 1){
    echo '<nav><ul class="pagination">';
    for ($i = 1; $i <= $max_page; $i++){
      echo '<li class="page-item"><a style="color:#000000;" href="bbs3.php?page='.$i.'">'.$i.'</a></li>';
    }
    echo '</ul></nav>';
  }
?>

<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>-->


        <!-- 本文ここまで -->
      </div>
    </main>


<div class="FooterSection">
        <div class="Footer">
            <div class="Footer-Inner">
                <div class="Footer-Inner-List">
                    <a href="../mail/mail_form.html" class="Footer-Inner-List-Item">お問い合わせ</a>
                    <a href="../term.html" class="Footer-Inner-List-Item">利用規約</a>
                    <a href="../privacypolicy.html" class="Footer-Inner-List-Item">プライバシーポリシー</a>
                </div>
                <div class="Footer-Inner-CopyRight">
                ©2021 幻憩
                </div>
            </div>
        </div>
</div>

</body>
</html>
