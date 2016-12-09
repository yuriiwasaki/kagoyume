<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccessUtil.php");

delete_mydata($_SESSION['user']['userID']); //$_SESSION['userID']
var_dump($_SESSION['user']['userID']);
//unset($_SESSION['user']);
//セッションを破棄


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザーデータの消去</title>
</head>
<body>
    <p>ユーザー情報を削除しました</p>

<!--  セッションの破棄が必要-->

    <p><?php echo return_top(); ?></p>
</body>
</html>
