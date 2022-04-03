<?php
session_start();
?>

<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>幻憩</title>
    <link rel="stylesheet" href="seisaku.css">
    
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


    <main>
            <section>
            <div class="scrollanime"><img src="15.jpg" alt="ようこそ"></div>
            <h1 class="scrollanime">忙しく毎日に追われる現代社会。ここはそんな毎日に疲れた時、画像を見て感傷に浸りつつリラックスする休憩場所です</h1>

            <section>
            <div class="scrollanime downup"><img src="24.jpg" alt="休憩"></div>
            <h1 class="scrollanime downup">ここにあるのは幻想的でノスタルジックな画像のみ。それ以外は一切何もありません</h1>
            </section>

            <section>
            <div class="scrollanime slide-right"><img src="32.jpg" alt="共有"></div>
            <h1 class="scrollanime slide-right">画像だけでなく、タイトルやコメントも一緒に投稿することも出来ます。世界中の皆さんと一緒にシェアしましょう</h1>
            </section>

            <section>
            <div class="scrollanime slide-left"><img src="52.jpg" alt="幻想の旅へ" ></div>
            <h1 class="scrollanime slide-left">何の準備もいりません。いますぐ一歩を踏み出して束の間の癒しの世界に飛び込みましょう！</h1>
            </section>  
        </div>
    </main>


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
        <article id="wrap">
  <article id="lightings">
      <section id="one">
            <section id="two">
                <section id="three">
                    <section id="four">
                        <section id="five">
                            
                        </section>
                    </section>
                </section>
            </section>
    </section>
    </article>
</article>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="seisaku.js"></script>
</body>
</html>