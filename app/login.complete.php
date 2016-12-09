<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");
require_once("../common/dbaccesstUtil.php");



// unset($_SESSION['user']);
// $pdo=new PDO('mysql:host=localhost; dbname=user_t; charset=utf-8','password,name');
// $sql = $pdo->prepare('SELECT * FROM user_t WHERE password=? and name=?');
// $sql->execute([$_REQUEST['login'],$_REQUEST['password']]);
//
// foreach ($sql->fetchall() as $row) {
//     $_SESSION['user'] =[
//         'name'=>$row['name'],'password'=>$row['password'],'mail'=>$row['mail'],'adress'=>$row['adress'],'total'=>$row['total'],'newDate'=>$row['datetime'],'deleteFlg'=>$row['deleteFlg']];
// }
// if(isset($_SESSION['customer'])) {
//     echo 'ログイン成功' , $_SESSION['user']['name'];
// } else {
//     echo 'ログインか名前が違います';
// }
// require'../';  //ユーザがログイン前までみていたページに戻る

?>
