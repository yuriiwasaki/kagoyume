<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccessUtil.php");

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザーデータの変更</title>
</head>
<body>
    <h1>ユーザーデータの変更</h1>
    <?php

    // if(!isset($_POST['id'])){
    //     echo '不正なアクセスです。<br>';
    // }else{ ?>
    <?=MY_DATA_UP_CONFIRM?>
    <form action="<?=MY_DATA_UP_CONFIRM?>" method="POST">

    name:
    <input type="text" name="name" value="<?php echo $_SESSION['user']['name']; ?>">
    <br>
    password:
    <input type="text" name="password" value="<?php echo $_SESSION['user']['password']; ?>"><br>
    address:<input type="text" name="adress" value="<?php echo $_SESSION['user']['adress']; ?>"><br>
    mail:
    <input type="text" name="mail" value="<?php echo $_SESSION['user']['mail']; ?>">
    <br><br>


    <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
    </form>
        <p>ユーザー情報を変更しますか？</p>
    <p><?php echo return_top(); ?></p>
</body>
</html>
