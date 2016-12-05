<?php
require_once("../common/defineUtil.php");
require_once("../common/scriptUtil.php");

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>ショッピングデモサイト - 商品を検索する</title>
<link rel="stylesheet" type="text/css" href="../css/prototype.css"/>
</head>
<body>
    <h1>かごいっぱいの夢 商品を検索する</h1>
    <p>買いたい商品を選んで商品の合計額を確認し、買い物のシュミレーションができます。<br></p>
    <p>※実際に買うことはできません</p>


            <form action="<?= SEARCH ?>" class="Search">
            表示順序:
            <select name="sort">
            <?php foreach ($sortOrder as $key => $value) { ?>
            <option value="<?php echo h($key); ?>"><?php echo h($value);?></option>
            <?php } ?>
            </select>
            キーワード検索：
            <select name="category_id">
            <?php foreach ($categories as $id => $name) { ?>
            <option value="<?php echo h($id); ?>"><?php echo h($name);?></option>
            <?php } ?>
            </select>
            <input type="text" name="query" value="<?php echo h(""); ?>"/>
            <input type="submit" value="Yahooショッピングで検索"/><br>

    <h2><a href="<?php echo REGISTRATION;?>">新規会員登録はこちら</a></h2><br>

    <h3><a href="<?php echo LOGIN;?>">ログイン</a></h3>

            </form>

    <!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
    <a href="http://developer.yahoo.co.jp/about">
    <img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn2_105_17.gif" width="105" height="17" title="Webサービス by Yahoo! JAPAN" alt="Webサービス by Yahoo! JAPAN" border="0" style="margin:15px 15px 15px 15px"></a>
    <!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
</body>


</html>
