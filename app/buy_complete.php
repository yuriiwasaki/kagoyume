<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");

?>
<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <meta charset="utf-8">
    <title>購入完了</title>
</head>
<body>
        <h1>購入シュミレートの完了</h1>
        <p>以下の商品の購入シュミレートが終わりました。</p>
        <form action="<?php  ?>" method="POST">

    <!-- //dbテーブルbuy_tに書き込むことが目的 -->

    <?php foreach ($_SESSION['cart'] as $itemInf) {?>
    <img src='<?php echo $itemInf["image"]; ?>'align='right'>
        <ol>
            <li>商品名：<?php echo $itemInf["name"]; ?></li>
            <li><?php echo $itemInf["price"]; ?>円</li><br>
            <li>商品コード：<?php echo $itemInf["code"]; ?></li><br>
        </ol>
    <hr style="border-top: 4px double #ff9d9d;width: 100%;height:3;">
    <?php
    if(!isset($total)){
            $total = $itemInf["price"];//一周め
    }else{
                $total = $total + $itemInf["price"];     //二周目以降
            } }?>
    <hr style="border-top: 4px double #ff9d9d;width: 100%;height:3;">
    <h2>金額合計</h2>
    <?php echo $_POST['total'].'<br>';
        echo $_POST['send'].'<br>'; ?>

<?php
    echo return_top();
?>
    </form>
</body>
</html>
