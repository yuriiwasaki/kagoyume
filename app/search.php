<?php
session_start();

require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");

    $query = $_GET['query'];
    $category_id = $_GET['category_id'];
    $sort = $_GET['sort'];

if ($query != "") {
    $query4url = rawurlencode($query);
    $sort4url = rawurlencode($sort);
    $url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch?appid=$appid&query=$query4url&category_id=$category_id&sort=$sort4url&hits=10";
    $xml = simplexml_load_file($url);
    if ($xml["totalResultsReturned"] != 0) {//検索件数が0件でない場合,変数$hitsに検索結果を格納します。
        $hits = $xml->Result->Hit;
    }
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <title>かごいっぱいの夢</title>
</head>
<body>
    <h1>かごいっぱいの夢</h1>
    <p>買いたい商品を選んで商品の合計額を確認し、買い物のシュミレーションができます。<br></p>
    <p>※実際に買うことはできません</p>
    <?php $i=1; ?>
    <?php
    if(isset($hits)){


    foreach ($hits as $hit) { //APIを使う?>
    <div class="Item">
        <h2><a href="<?php echo ITEM.'?num='.$i; ?>"><?php echo h($hit->Name); ?></a></h2>
        <p><a href="<?php echo ITEM.'?num='.$i; ?>"><img src="<?php echo h($hit->Image->Medium); ?>" /></a><?php echo h($hit->Description);

        $_SESSION["Name$i"]= h($hit->Name);
        $_SESSION["Image$i"]= h($hit->Image->Medium);
        $_SESSION["Rate$i"]= h($hit->Review->Rate);
        $_SESSION["Description$i"]= h($hit->Description);
        $_SESSION["Price$i"]= h($hit->Price);
        $_SESSION["Code$i"]= h($hit->Code);

        $i++;

         ?></p>
    </div>
    <?php } }else{
        echo '検索結果はありません';
    } ?>
    <?php
        echo return_top();
    ?>
</body>
</html>
