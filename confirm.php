<?php
require_once './securimage/securimage.php';
$securimage = new Securimage();
if(isset($_POST['captcha_code'])) {
  if($securimage->check($_POST['captcha_code']) === true) {
  } else {
    echo $uri = $_SERVER['HTTP_REFERER'];
    header("Location: ".$uri);
  }  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/inquiry.css">
    <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>
    <div class="top-container">
        <div class="header-footer-container">
            <div class="header-logo float-left">
                <p><span class="color-alice">A</span>lice <span class="fs-15">inc.</span></p>
            </div>
            <ul class="header-list float-right">
                <li>HOME</li>
                <li>選ばれる理由</li>
                <li>ソリューション</li>
                <li>インダストリー</li>
                <li>企業情報</li>
                <li>お問い合わせ</li>
            </ul>    
        </div>
        <div class="main-container">
            <h1>確認画面</h1>
            <p>入力した内容をご確認ください。</p>
            <form action="./send_mail.php" method="post">
            <table>
                <tr class="first">
                    <th>氏名</th>
                    <td><input type="text" name="name" value="<?php echo $_POST['name']; ?>"></td>
                </tr>
                <tr class="second">
                    <th>貴社名</th>
                    <td><input type="text" name="office" value="<?php echo $_POST['office']; ?>"></td>
                </tr>
                <tr class="first">
                    <th>所属部署</th>
                    <td><input type="text" name="department" value="<?php echo $_POST['department']; ?>"></td>
                </tr>
                <tr class="second">
                    <th>電話番号</th>
                    <td><input type="number" name="tel" value="<?php echo $_POST['tel']; ?>"></td>
                </tr>
                <tr class="first">
                    <th>メールアドレス</th>
                    <td><input type="text" name="mail" value="<?php echo $_POST['mail']; ?>"></td>
                </tr>
                <tr class="second">
                    <th>お問い合わせ内容</th>
                    <td><textarea cols="30" rows="20" name="contents"><?php echo $_POST['contents']; ?></textarea></td>
                </tr>

            </table>
            <div class="button-container">
                <button type="submit">送信</button>
            </div>
            </form>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-index">
                <ul class="footer-bottom-list float-left">
                    <li>サイトポリシー</li>
                    <li>情報セキュリティ基本方針</li>
                    <li>個人情報保護方針</li>
                    <li>電子公告</li>
                </ul>
            </div>
            <div class="footer-bottom-copyright float-right">
                <p>Copyright @ Alice Inc.</p>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/textyle.min.js"></script>
<!-- <script src="js/particles.js"></script> -->
<!-- <script src="js/top_page.js"></script> -->
<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
<!-- <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script> -->

</body>
</html>"