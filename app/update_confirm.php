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
    <?php
    echo $_POST['name'].'<br>';
    echo $_POST['password'].'<br>';
    echo $_POST['mail'].'<br>';
    echo $_POST['adress'].'<br>';

    ?>
    <h1>ユーザーデータの変更</h1>

    <p>変更しますか？</p>
        <form action="<?php echo MY_DATA_UP_RESULT; ?>" method="POST">
            <input type="hidden"  name="name" value="<?php echo $_POST['name']; ?>">
            <input type="hidden"  name="password" value="<?php echo $_POST['password']; ?>">
            <input type="hidden"  name="mail" value="<?php echo $_POST['mail']; ?>">
            <input type="hidden"  name="adress" value="<?php echo $_POST['adress']; ?>">
            <input type="submit" value="変更する">
        </form>
    <p><?php echo return_top(); ?></p>
</body>
