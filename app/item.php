<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");



    $i= $_GET['num'];
    // $i;
    // $_SESSION["Name$i"];
    // $_SESSION["Rate$i"];
    // $_SESSION["Image$i"];
    // $_SESSION["Description$i"];
    // $_SESSION["Price$i"];
    // $_SESSION["Code$i"];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>検索結果一覧</title>
    </head>
    <body>
        <h1>商品の詳細</h1>
        <p>商品の詳細は以下の通りです。</p>
        <img src='<?php echo $_SESSION["Image$i"] ?>'align='right'>
        <ol align='left'>
            <li>商品名：<?php echo $_SESSION["Name$i"]; ?></li>
            <li>レビュー平均：<?php echo $_SESSION["Rate$i"]; ?></li><br>
            <li>商品説明：<?php echo $_SESSION["Description$i"]; ?></li><br>
            <li><?php echo $_SESSION["Price$i"]; ?>円</li><br>
            <li>商品コード:<?php echo $_SESSION["Code$i"]; ?></li><br>
        </ol>
        <form action="<?php echo ADD; ?>" method='POST'>
            <input type="hidden" name="itemNum" value="<?php echo $i; ?>">
            <!--  add.phpにセッションに入った各値を隠しデータで送る, echoでhtmlにphp読み込ませる-->

            <input type="submit" value="カートへ追加">
         </form>
         
         <?php
             echo return_top();
         ?>
    </body>

</html>

<!-- //hitの中にある写真、評価値と商品説明,商品コード 商品名、金額を送る
//直リンク禁止
// ->Name 商品名 ResultSet/Result/Hit/Review/Rate レビュー平均 /ResultSet/Result/Hit/Description 商品説明 /ResultSet/Result/Hit/Image/Medium	画像ID /ResultSet/Result/Hit/Price	価格 htmlでimageを表示 改行　円　表示した後にカートに追加ボタン
//$iだけは送り先add.php -->
