<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
// require_once("../common/dbaccesstUtil.php");

// $insert = new user_tControll(); //関数の作成 dbから配列で引数を取得するする
$page = "http://localhost/kagoyume/"//ログインページのurl




?>
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="utf-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="<?php REGISTRATION ?>" method="POST">
    <ol>
        <li>パスワード:<input type="text" name="password" required></li>
        <li>名前:<input type="text" name="name" value="<?php ?>" required></li>
    </ol>
    <a href="<?php
        echo REGISTRATION;
    ?>">初めての方はこちら</a>
        <input type="submit" name="btnSubmit" value="ログイン">

        <h2><?php
            echo return_top();
        ?></h2>
    </form>

</body>
</html>
