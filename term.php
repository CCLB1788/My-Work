<?php
session_start();
?>

<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用規約</title>
    <link rel="stylesheet" href="term.css">
</head>

<body>
    <header>
        <div class="title">
            <li><a href="seisaku.php">幻憩</a></li>
        </div>

        <nav>
            <ul>
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
            <h2 class="Inner-Headline">利用規約</h2>
            <p class="Inner-Text first">
                この利用規約（以下、「本規約」と称します。）は、幻憩運営（以下、「運営」と称します。）がこのウェブサイト上で提供するサービス（以下、「本サービス」と称します。）の利用条件を定めるものです。
                登録ユーザーの皆さま（以下、「ユーザー」と称します。）には本規約に従って本サービスをご利用いただきます。
            </p>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第1条（適用)</h3>
                <ol class="Inner-Box-List">
                    <li class="Inner-Box-List-Item">
                        利用者は、本サービスの利用により取得した個人情報（個人情報の保護に関する法律に規定される「個人情報」をいいます。）を、個人情報の保護に関する法律及び同法施行令ならびに関係省庁による同法に関するガイドライン等、個人情報保護に関する一切の法規に従い適正に取り扱い、善良なる管理者の注意義務を持って管理するものとします。
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社は本サービスに関し，本規約のほか，ご利用にあたってのルール等，各種の定め（以下，「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の一部を構成するものとします。
                    </li>
                    <li class="Inner-Box-List-Item">
                        本規約の規定が前条の個別規定の規定と矛盾する場合には，個別規定において特段の定めなき限り，個別規定の規定が優先されるものとします。
                    </li>
                </ol>
            </div>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第2条 利用登録</h3>
                <ol class="Inner-Box-List">
                    <li class="Inner-Box-List-Item">
                        本サービスにおいては，登録希望者が本規約に同意の上，当社の定める方法によって利用登録を申請し，当社がこの承認を登録希望者に通知することによって，利用登録が完了するものとします。
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社は，利用登録の申請者に以下の事由があると判断した場合，利用登録の申請を承認しないことがあり，その理由については一切の開示義務を負わないものとします。
                    </li>
                    <ol class="Inner-Box-List-Item-Ol">
                        <li class="Inner-Box-List-Item-Ol-Item">利用登録の申請に際して虚偽の事項を届け出た場合</li>
                        <li class="Inner-Box-List-Item-Ol-Item">本規約に違反したことがある者からの申請である場合</li>
                        <li class="Inner-Box-List-Item-Ol-Item">その他，当社が利用登録を相当でないと判断した場合</li>
                    </ol>
                </ol>
            </div>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第3条 (ユーザーIDおよびパスワードの管理)</h3>
                <ol class="Inner-Box-List">
                    <li class="Inner-Box-List-Item">
                        本サービスにおいては，登録希望者が本規約に同意の上，当社の定める方法によって利用登録を申請し，当社がこの承認を登録希望者に通知することによって，利用登録が完了するものとします。
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社は，利用登録の申請者に以下の事由があると判断した場合，利用登録の申請を承認しないことがあり，その理由については一切の開示義務を負わないものとします。
                    </li>
                    <ol class="Inner-Box-List-Item-Ol">
                        <li class="Inner-Box-List-Item-Ol-Item">利用登録の申請に際して虚偽の事項を届け出た場合</li>
                        <li class="Inner-Box-List-Item-Ol-Item">本規約に違反したことがある者からの申請である場合</li>
                        <li class="Inner-Box-List-Item-Ol-Item">その他，当社が利用登録を相当でないと判断した場合</li>
                    </ol>
                </ol>
            </div>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第4条 (利用料金および支払方法)</h3>
                <ol class="Inner-Box-List">
                    <li class="Inner-Box-List-Item">
                        ユーザーは，本サービスの有料部分の対価として，当社が別途定め，本ウェブサイトに表示する利用料金を，当社が指定する方法により支払うものとします。
                    </li>
                    <li class="Inner-Box-List-Item">
                        ユーザーが利用料金の支払を遅滞した場合には，ユーザーは年14．6％の割合による遅延損害金を支払うものとします。
                    </li>
                </ol>
            </div>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第5条 禁止事項</h3>
                <p>ユーザーは，本サービスの利用にあたり，以下の行為をしてはなりません。</p>
                <ol class="Inner-Box-List">
                    <li class="Inner-Box-List-Item">
                        法令または公序良俗に違反する行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        犯罪行為に関連する行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社，本サービスの他のユーザー，または第三者のサーバーまたはネットワークの機能を破壊したり，妨害したりする行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社のサービスの運営を妨害するおそれのある行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        他のユーザーに関する個人情報等を収集または蓄積する行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        不正アクセスをし，またはこれを試みる行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        他のユーザーに成りすます行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社のサービスに関連して，反社会的勢力に対して直接または間接に利益を供与する行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社，本サービスの他のユーザーまたは第三者の知的財産権，肖像権，プライバシー，名誉その他の権利または利益を侵害する行為
                    </li>
                    <li class="Inner-Box-List-Item">
                        以下の表現を含み，または含むと当社が判断する内容を本サービス上に投稿し，または送信する行為
                    </li>
                    <ol class="Inner-Box-List-Item-Ol">
                        <li class="Inner-Box-List-Item-Ol-Item">過度に暴力的な表現</li>
                        <li class="Inner-Box-List-Item-Ol-Item">露骨な性的表現</li>
                        <li class="Inner-Box-List-Item-Ol-Item">人種，国籍，信条，性別，社会的身分，門地等による差別につながる表現</li>
                        <li class="Inner-Box-List-Item-Ol-Item">自殺，自傷行為，薬物乱用を誘引または助長する表現</li>
                        <li class="Inner-Box-List-Item-Ol-Item">その他反社会的な内容を含み他人に不快感を与える表現</li>
                    </ol>
                </ol>
            </div>

            <div class="Inner-Box">
                <h3 class="Inner-Box-Headline">第5条 個人情報保護方針</h3>
                <ol class="Inner-Box-List">
                    <li class="Inner-Box-List-Item">
                        利用者は、本サービスの利用により取得した個人情報（個人情報の保護に関する法律に規定される「個人情報」をいいます。）を、個人情報の保護に関する法律及び同法施行令ならびに関係省庁による同法に関するガイドライン等、個人情報保護に関する一切の法規に従い適正に取り扱い、善良なる管理者の注意義務を持って管理するものとします。
                    </li>
                    <li class="Inner-Box-List-Item">利用者は、前項の個人情報を、本人の同意なく、第三者に提供すること及び利用者が定める個人情報の利用目的以外の目的で使用しないものとします。
                    </li>
                    <li class="Inner-Box-List-Item">
                        当社は、第三者の提供するコールトラッキングサービスを使用し、当該サービスがお客様の個人情報を取得する場合があります。その場合の個人情報の取り扱いについては、当規約に加え、サービス提供元の<a
                            href="#" class="Inner-Box-List-Item-Link">個人情報保護方針</a>に従うものとします。</li>
                    <li class="Inner-Box-List-Item">利用者が前各項に違反し、利用者又は当社が第三者から権利侵害の主張をされた場合には、利用者の費用と責任においてこれを解決するものとします。
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
                                自己、自社若しくは第三者の不正の利益を図る目的又は第三者に損害を加える目的をもってするなど、不当に暴力団等反社会的勢力を利用していると認められる関係を有すること</li>
                            <li class="Inner-Box-List-Item-Ol-Item">
                                暴力団等反社会的勢力に対して資金等を提供し、又は便宜を供与するなど関与をしていると認められる関係を有すること
                            </li>
                            <li class="Inner-Box-List-Item-Ol-Item">役員又は経営に実質的に関与している者が暴力団等反社会的勢力と社会的に非難されるべき関係を有すること
                            </li>
                        </ol>
                    </li>
                    <li class="Inner-Box-List-Item">
                        利用者は、当社が前項の該当性の判断のために調査を要すると判断した場合、その調査に協力し、これに必要と判断する資料を提出しなければならないものとします。</li>
                    <li class="Inner-Box-List-Item">
                        利用者及び当社は、相手方が暴力団等反社会的勢力に属すると判明した場合、催告をすることなく、本サービス利用契約を解除することができるものとします。
                    </li>
                    <li class="Inner-Box-List-Item">利用者及び当社は、前項の規定により本サービス利用契約を解除した場合に相手方に損害が生じてもこれを賠償する責任を負わないものとします。
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