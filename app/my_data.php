<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccessUtil.php");

?>
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="utf-8">
    <title>マイページ</title>
</head>
<body>
    <h1>カゴいっぱいの夢・マイデータページ</h1>
    <?php foreach ($_SESSION['user'] as $key => $value) {
        // if($key == 'userID' || $key == 'password'){
        // continue;
        // }
        echo $key.': ';
        echo $value.'<br>';

    } ?>


    <p><a href="<?php  echo MY_DATA_UPDATE; ?>">ユーザー情報の変更</a></p>
    <p><a href="<?php ?>">購入履歴を見る</a></p>
    <p><a href="<?php echo MY_DATA_DELETE; ?>"> ユーザー情報を消去</a></p>
    <a href="<?php echo REGISTRATION; ?>">初めての方はこちら</a>


        <h2><?php
            echo return_top();
        ?></h2>
    </form>

</body>
</html>
