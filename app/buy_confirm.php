<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");

    $cartInf = $_SESSION['cart'];

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>購入確認画面</title>
</head>
<body>
    <h1>カートの内容</h1>
    <p>カートの内容は以下の通りです。以下の商品を購入しますか？</p><br>
    <?php foreach ($cartInf as $itemInf) {?>
    <img src='<?php echo $itemInf["image"] ?>'align='right'>
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
    }
     ?>
    <?php }?>
    <h2>合計金額</h2><?php
        echo $total.'円';
        $total
        ?>

    <h3>発送方法</h3>


        <form action=<?php echo BUY_COMPLETE; ?> method="POST">
        <input type="submit" value="上記内容で購入する">
            <input type="radio" name="send" value="通常配達" checked="checked">通常配送
            <input type="radio" name="send" value="速達" checked="checked">速達<br>
            <input type="hidden" name="total" value="<?php echo $total.'円'; ?>"></form><br>
        <form action=<?php echo CART; ?> method="POST">
        <input type="submit" value="カートに戻る">
        </form>
        <?php
            echo return_top();
        ?>


</body>
</html>
