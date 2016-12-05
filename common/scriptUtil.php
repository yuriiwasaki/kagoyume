<?php
//TOPページへのリンクを表示
function return_top(){
    return "<a href='".ROOT_URL."'>TOPに戻る</a>";
}



function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}
//scriptUtil
?>
