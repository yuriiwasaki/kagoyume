<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccessUtil.php");


$result = update_user($_POST['name'],$_POST['password'],$_POST['mail'],$_POST['adress'],$_SESSION['user']['userID']);

if($result !== null){
    $a=$result; //エラー返す
}else{
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['password']  = $_POST['password'];
    $_SESSION['user']['mail'] = $_POST['mail'];
    $_SESSION['user']['adress'] = $_POST['adress'];
    
    $a='更新に成功しました'; //変数に入れてどちらにせよ結果を表示させたい
}


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザーデータの変更</title>
</head>
<body>

    <h1>ユーザーデータ変更通知</h1>

    <?php  echo $a; ?>


        </form>
    <p><?php echo return_top(); ?></p>
</body>
