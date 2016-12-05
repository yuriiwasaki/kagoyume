<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
//REGISTRATION


?>
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="utf-8">
    <title>会員登録</title>
</head>
<body>
    <h1>はじめてのお客様・会員登録はこちら</h1>
    <form action="<?php echo REGISTRATION_COMFIRM ?>" method="POST">
    <ol>
        <li>パスワード:<input type="password" name="password" required></li>
        <li>お名前:<input type="text" name="name" value="<?php ?>" required></li>
        <li>メールアドレス:<input type="text" name="mail" value="<?php ?>" required></li>
        <li>住所:<input type="text" name="address" value="<?php ?>" required></li>
    </ol>


        <input type="submit" name="btnSubmit" value="登録する"><br>
    </form>

    <?php
        echo return_top();
    ?>
</body>
</html>
