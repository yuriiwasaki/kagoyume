<?php
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccesstUtil.php");

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
    <form action="<?php REGISTRATION ?>" method="POST">
    <p><a href="<?php ?>">ユーザー情報の変更</a></p>
    <p><a href="<?php ?>">購入履歴を見る</a></p>
    <p><a>ユーザー情報を消去</a></p>
    <p><a>トップページに戻る</a></p>
    <a href="<?php echo REGISTRATION; ?>">初めての方はこちら</a>
        <input type="submit" name="btnSubmit" value="ログイン">

        <h2><?php
            echo return_top();
        ?></h2>
    </form>

</body>
</html>
