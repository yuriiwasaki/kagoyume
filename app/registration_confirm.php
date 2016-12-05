<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
//REGISTRATION_COMFIRM

//新規登録ユーザーの各情報を連想配列にまとめる
$register_data  = array(
    'password' => $_POST['password'],
    'name' =>  $_POST['name'],
    'mail' => $_POST['mail'],
    'address' => $_POST['address']
);
    $_SESSION['register'] = $register_data;



?>
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="utf-8">
    <title>登録内容の確認</title>
</head>
<body>
    <h1>登録内容の確認</h1>
    <p>以下の内容で登録しますか？</p>

    <ol>
        <li>パスワード:<?php echo $_POST['password']; ?></li>
        <li>お名前:<?php echo $_POST['name'];?></li>
        <li>メールアドレス:<?php echo $_POST['mail']; ?></li>
        <li>住所:<?php echo $_POST['address']; ?></li>
    </ol>


    <form action="<?php echo REGISTRATION_COMPLETE ?>" method="POST">
        <input type="hidden" name="" value="">
        <input type="submit" name="btnSubmit" value="登録する"><br>
    </form>

    <form action="<?php echo REGISTRATION ?>" method="POST">
    <input type="submit" name="btnSubmit" value="入力画面へ戻る">
    </form>
    <?php
        echo return_top();
    ?>
</body>
</html>
