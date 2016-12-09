<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccessUtil.php");

// $_SESSION['user']
echo $_SESSION['user']['name'];
echo $_SESSION['user']['password'];
echo $_SESSION['user']['mail'];
echo $_SESSION['user']['adress'];

//やるUPDATE deleteFlg 0 1に変える

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザーデータの消去</title>
</head>
<body>

    <p>上記のユーザー情報を削除しますか？</p>
    <form action="<?php echo MY_DATA_DELETE_RESULT;?>" method="POST" >
    <input type="submit" name="delete" value="削除する">
    </form>
    <p><?php echo return_top(); ?></p>
</body>
</html>
