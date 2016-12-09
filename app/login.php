<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccessUtil.php");


    // if(isset($_SESSION['user'])){
    // unset($_SESSION['user']);
    // echo '<p>ログアウト成功</p>';
    // //ログアウト成功
    // }

    if(isset($_POST['btnSubmit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        //DB接続 名前がDBにあるかどうか あったら名前のデータを引っ張ってくる
        //DBから引いてきたパスワードと＄passwordが一致しているかどうか　成功ログイン成功
        //ユーザ情報をセッションに入れる
        $a = search_db($name,$password);

        if (empty($a)) {
            echo 'ログイン失敗';
        } elseif (!empty($a)) {
            echo 'ログイン成功';
            $_SESSION['user'] ="";
        }

    }

    $thispage = "http://localhost/kagoyume/app/login.php";
    if($_SERVER['HTTP_REFERER'] == $thispage){
        $url = $_REQUEST['url'];//しない
    }else{
        $url = $_SERVER['HTTP_REFERER'];
    } //リダイレクト





//require'../';  //ユーザがログイン前までみていたページに戻る
//ログイン時にボタンの表示をログアウトに変えるif ログインというセッションの中身空 ログインだけのセッション作って、ログアウト時にセッション切れる

?>
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <?php if(isset($_SESSION['user'])){ ?>
    <meta http-equiv="refresh" content="5;url=<?php echo $url; ?>">
    <?php } ?>
    <meta charset="utf-8">
    <title>ログインログアウト</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="<?php echo LOGIN; ?>" method="POST">
    <ol>
        <li>パスワード:<input type="text" name="password" required></li>
        <li>名前:<input type="text" name="name" required></li>
    </ol>
    <a href="<?php echo REGISTRATION; ?>">初めての方はこちら</a>

        <?php
       if(isset($_SESSION['user'])){
           echo  '<input type="submit"name="btnSubmit" value="ログアウト">';
       }else{
           echo '<input type="submit"name="btnSubmit" value="ログイン">';
       }

       ?>
    <input type="hidden" name="url" value="<?php echo $url; ?>">
    </form>
<h2><?php
    echo return_top();
?></h2>
</body>
</html>
