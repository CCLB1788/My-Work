<?php
session_start();
?>

<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プライバシーポリシー</title>
    <link rel="stylesheet" href="privacypolicy.css">
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

    <div class="Inner">
        <h2 class="Inner-Headline">プライバシーポリシー</h2>
        <p class="Inner-Text first">
            運営（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）
            における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。
        </p>

        <div class="Inner-Box">
            <h3 class="Inner-Box-Headline">第1条 個人情報</h3>
            <p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。
            </p>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第2条 個人情報の収集方法</h3>
                <p>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。
                </p>

                <div class="Inner-Box">
                    <h3 class="Inner-Box-Headline">第3条 個人情報を収集・利用する目的</h3>
                    <p>当社が個人情報を収集・利用する目的は，以下のとおりです。</p>
                    <ol class="Inner-Box-List">
                        <li class="Inner-Box-List-Item">
                            当社サービスの提供・運営のため
                        </li>
                        <li class="Inner-Box-List-Item">
                            ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため
                        </li>
                        <li class="Inner-Box-List-Item">
                            メンテナンス，重要なお知らせなど必要に応じたご連絡のため
                        </li>
                        <li class="Inner-Box-List-Item">
                            利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため
                        </li>
                        <li class="Inner-Box-List-Item">
                            ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため
                        </li>
                        <li class="Inner-Box-List-Item">
                            有料サービスにおいて，ユーザーに利用料金を請求するため
                        </li>
                        <li class="Inner-Box-List-Item">
                            上記の利用目的に付随する目的
                        </li>
                    </ol>
                </div>

                <div class="Inner-Box">
                    <h3 class="Inner-Box-Headline">第4条 利用目的の変更</h3>
                    <ol class="Inner-Box-List">
                        <li class="Inner-Box-List-Item">
                            当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。
                        </li>
                        <li class="Inner-Box-List-Item">
                            利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。
                        </li>
                    </ol>
                </div>

                <div class="Inner-Box">
                    <h3 class="Inner-Box-Headline">第5条 個人情報保護方針</h3>
                    <ol class="Inner-Box-List">
                        <li class="Inner-Box-List-Item">
                            利用者は、本サービスの利用により取得した個人情報（個人情報の保護に関する法律に規定される「個人情報」をいいます。）を、個人情報の保護に関する法律及び同法施行令ならびに関係省庁による同法に関するガイドライン等、個人情報保護に関する一切の法規に従い適正に取り扱い、善良なる管理者の注意義務を持って管理するものとします。
                        </li>
                        <li class="Inner-Box-List-Item">
                            利用者は、前項の個人情報を、本人の同意なく、第三者に提供すること及び利用者が定める個人情報の利用目的以外の目的で使用しないものとします。
                        </li>
                        <li class="Inner-Box-List-Item">
                            当社は、第三者の提供するコールトラッキングサービスを使用し、当該サービスがお客様の個人情報を取得する場合があります。その場合の個人情報の取り扱いについては、当規約に加え、サービス提供元の<a
                                href="#" class="Inner-Box-List-Item-Link">個人情報保護方針</a>に従うものとします。</li>
                        <li class="Inner-Box-List-Item">
                            利用者が前各項に違反し、利用者又は当社が第三者から権利侵害の主張をされた場合には、利用者の費用と責任においてこれを解決するものとします。
                        </li>
                    </ol>
                </div>

                <div class="Inner-Box">
                    <h3 class="Inner-Box-Headline">第6条 秘密保持</h3>
                    <ol class="Inner-Box-List">
                        <li class="Inner-Box-List-Item">
                            当社及び利用者は、相手方から秘密である旨明示のうえ受領し又は開示を受けた情報（以下「機密情報」という。）を、本契約の有効期間中及び本契約終了後も、第三者に開示又は漏洩してはならないものとします。ただし、監督官公庁又は法令に基づき開示が要請された場合を除きます。
                        </li>
                        <li class="Inner-Box-List-Item">個人情報を除き、前項にかかわらず次の各号の一に該当するものは機密情報にあたらないものとします。
                            <ol class="Inner-Box-List-Item-Ol">
                                <li class="Inner-Box-List-Item-Ol-Item">受領時に、既に公知であったもの</li>
                                <li class="Inner-Box-List-Item-Ol-Item">開示後、受領者の責に帰さない事由により公知となったもの</li>
                                <li class="Inner-Box-List-Item-Ol-Item">開示の時、受領者が既に保有していたもの</li>
                                <li class="Inner-Box-List-Item-Ol-Item">第三者から機密保持義務を負うことなく正当に入手したもの</li>
                            </ol>
                        </li>
                    </ol>
                </div>

                <div class="Inner-Box">
                    <h3 class="Inner-Box-Headline">第7条 反社会的勢力の排除</h3>
                    <ol class="Inner-Box-List">
                        <li class="Inner-Box-List-Item">
                            利用者及び当社は、自己（法人の場合は、代表者、役員又は実質的に経営を支配する者。）が暴力団、暴力団員、暴力団関係企業、総会屋、社会運動標ぼうゴロ、政治運動標ぼうゴロ、特殊知能暴力集団、その他反社会的勢力(以下｢暴力団等反社会的勢力｣という。)に該当しないこと、及び次のいずれにも該当しないことを表明し、かつ将来にわたっても該当しないことを確約するものとします。
                            <ol class="Inner-Box-List-Item-Ol">
                                <li class="Inner-Box-List-Item-Ol-Item">暴力団等反社会的勢力が経営を支配していると認められる関係を有すること</li>
                                <li class="Inner-Box-List-Item-Ol-Item">暴力団等反社会的勢力が経営に実質的に関与していると認められる関係を有すること</li>
                                <li class="Inner-Box-List-Item-Ol-Item">
                                    自己、自社若しくは第三者の不正の利益を図る目的又は第三者に損害を加える目的をもってするなど、不当に暴力団等反社会的勢力を利用していると認められる関係を有すること
                                </li>
                                <li class="Inner-Box-List-Item-Ol-Item">
                                    暴力団等反社会的勢力に対して資金等を提供し、又は便宜を供与するなど関与をしていると認められる関係を有すること
                                </li>
                                <li class="Inner-Box-List-Item-Ol-Item">
                                    役員又は経営に実質的に関与している者が暴力団等反社会的勢力と社会的に非難されるべき関係を有すること
                                </li>
                            </ol>
                        </li>
                        <li class="Inner-Box-List-Item">
                            利用者は、当社が前項の該当性の判断のために調査を要すると判断した場合、その調査に協力し、これに必要と判断する資料を提出しなければならないものとします。</li>
                        <li class="Inner-Box-List-Item">
                            利用者及び当社は、相手方が暴力団等反社会的勢力に属すると判明した場合、催告をすることなく、本サービス利用契約を解除することができるものとします。
                        </li>
                        <li class="Inner-Box-List-Item">
                            利用者及び当社は、前項の規定により本サービス利用契約を解除した場合に相手方に損害が生じてもこれを賠償する責任を負わないものとします。
                        </li>
                    </ol>
                </div>

                <div class="Inner-Box">
                    <h3 class="Inner-Box-Headline">第8条 知的財産権</h3>
                    <ol class="Inner-Box-List">
                        <li class="Inner-Box-List-Item">
                            本サービス内における画像、動画、文章、キャラクター、プログラムその他一切の情報（以下、「画像等」といいます。）に関する知的財産権は、利用者が自ら作成したポップアップ広告に関する知的財産権を除き、当社又は当社にその利用を許諾した者（以下、「権利者」といいます。）に帰属します。利用者は、法令に基づき認められる場合を除き、当社又は権利者による事前の許可なく、画像等を複製、送信その他の態様で使用することはできません。
                        </li>
                        <li class="Inner-Box-List-Item">
                            本サービスの名称その他本サービス内で表示される商品名、サービス名等には、当社又は第三者が商標権その他の使用権を有する名称が含まれます。本規約は、利用者その他の第三者に対し、知的財産権を譲渡又は使用許諾するものではありません。また、本サービスに関する知的財産権について、利用者がその登録の出願又は移転の申請を行ってはならないものとします。
                        </li>
                    </ol>
                </div>
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
    </div>
</body>

</html>