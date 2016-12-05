<?php
session_start();
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");

    $i = $_POST['itemNum'];
    $itemInf = array(
        'name' => $_SESSION["Name$i"],
        'rate' => $_SESSION["Rate$i"],
        'description' => $_SESSION["Description$i"],
        'image' => $_SESSION["Image$i"],
        'price' => $_SESSION["Price$i"],
        'code' => $_SESSION["Code$i"]
    );
    if(isset($_SESSION['cart'])){
        $cartInf = $_SESSION['cart'];
        array_push($cartInf,$itemInf);
    }else{
        $cartInf = array($itemInf);
    }
    $_SESSION['cart'] = $cartInf;

//連想配列でカートに追加したい商品の情報$itemInfを$SESSION_['cart']の中に代入
//大きい配列$_SESSION['cart']の中に配列$itemInfを追加

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>カートに追加</title>
</head>
<body>
    <h1>カートに追加</h1>
    <p>カートに商品を追加しました</p>
    <ol>
        <li>商品名:<?php echo $itemInf['name'].'<br>';?></li>
        <li>価格:<?php echo $itemInf['price'].'<br>';?></li>
        <li>商品コード:<?php echo $itemInf['code'].'<br>';?></li>
    </ol>
    <form action="<?php echo CART; ?>" method='POST'>
    <input type="submit" value="カートをみる">
    </form>
    
    <?php
        echo return_top();
    ?>

</body>

</html>
