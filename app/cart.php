<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");


    if(isset($_POST['delete'])){
        unset($_SESSION['cart'][ $_POST['delete']]);
    } //削除ボタンの機能postに隠しデータで送っているものが有ったら、削除、unset関数

// $a = $_SESSION['cart']; //配列
// $b = $_POST['delete']; //消したい位置の数字
//
//         $a[$b];
//         unset($a[$b]);
//         $_SESSION['cart'] = $a;
//
//
     $cartInf = $_SESSION['cart'];

     //合計金額を入れる変数を初期化
     $total = 0;
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>カートの内容</title>
</head>
<body>
    <h1>カートの内容</h1>
    <p>カートの内容は以下の通りです。</p><br>
    <?php foreach ($cartInf as $key => $itemInf) {?>
        <img src='<?php echo $itemInf["image"] ?>'align='right'>
        <ol align='left'>
            <!-- <li><?php echo $key; ?></li> -->
            <li>商品名：<?php echo $itemInf["name"]; ?></li>
            <li>レビュー平均：<?php echo $itemInf["rate"]; ?></li><br>
            <li>商品説明：<?php echo $itemInf['description']; ?></li><br>
            <li><?php echo $itemInf["price"]; ?>円</li><br>
            <li>商品コード：<?php echo $itemInf["code"]; ?></li><br>
        </ol>
        <form action="<?php echo CART; ?>" method="POST">
        <input type="hidden" name="delete" value="<?php echo $key; ?>">
        <input type="submit" value="削除する" align='right'>
        </form>
        <hr style="border-top: 4px double #ff9d9d;width: 100%;height:3;">
        <?php
                    $total = $total + $itemInf["price"];
                    //$totalに各商品の価格を加算して商品の合計金額を計算
        ?>

        <?php } ?>
        <h2>合計金額</h2><?php
            echo $total.'円';?>


            <form action="<?php echo BUY_CONFIRM; ?>" method='POST'>
            <input type="submit" value="購入する">
            </form>

            <?php
                echo return_top();
            ?>
</body>

</html>
