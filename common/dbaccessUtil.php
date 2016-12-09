<?php
//新規会員登録の機能
//DBへの接続を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=kagoyume_db;charset=utf8',
                            'yuri','yuri1988');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e){
            die( 'DB接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
        }

    }
//ログインページ 入れられた値name passwordをDBから検索する関数
function search_db($name,$password){
    $search_db = connect2MySQL();
    $search_sql= "SELECT * FROM user_t WHERE name=:name AND password=:password";
    $search_query = $search_db -> prepare($search_sql);

    $search_query->bindValue(':name',$name);
    $search_query->bindValue(':password',$password);

    try{
        $search_query ->execute();
        $result = $search_query -> fetchall(PDO::FETCH_ASSOC);
        //fetchall 一件あればok
        $search_db=null;
        return $result;
    } catch (PDOExeption $e) {
        $search_db=null;
        return $e -> getMessage();
    }
}



    //dbに全項目のあるレコードを挿入する
function Insert_user_t($register){/*引数は登録ユーザーの各情報の連想配列。キーがそれぞれの値の情報になっている*/
    $insert_db = connect2MySQL();  //データベースへの接続を開く
    $insert_sql = "INSERT INTO user_t(password,name,mail,adress,newDate)"."VALUES(:password,:name,:mail,:adress,:newDate)";
    $datatime = new datetime();
    $date = $datatime->format('Y-m-d H:i:s');//変数$dateにformatで指定した形に変換した現在時刻を代入
    $insert_query =$insert_db->prepare($insert_sql);//SQL文をprepareコンテナに代入

    /*prepareコンテナに代入したSQL文の足りない情報を補完するために
    SQLのパラメーターに登録情報の配列から該当する値を取り出して挿入*/
    $insert_query->bindValue(':password',$register['password']);
    $insert_query->bindValue(':name',$register['name']);
    $insert_query->bindValue(':mail',$register['mail']);
    $insert_query->bindValue(':adress',$register['address']);
    $insert_query->bindValue(':newDate',$date);

    try{
        $insert_query->execute();
        $insert_db=null;
        return null;
    } catch (PDOExeption $e) {
        $insert_db=null;
        return $e -> getMessage();
    }}
//引数に一つずつ入れてしまう
function update_user($name,$password,$mail,$adress,$userID){
    $update_db = connect2MySQL();  //データベースへの接続を開く
    $update_sql ="UPDATE user_t SET name=:name,password=:password,mail=:mail,adress=:adress WHERE
    userID=:userID";
    $update_query =$update_db->prepare($update_sql);//SQL文をprepareコンテナに代入

    $update_query->bindvalue(':name',$name);
    $update_query->bindvalue(':password',$password);
    $update_query->bindvalue(':mail',$mail);
    $update_query->bindvalue(':adress',$adress);
    $update_query->bindvalue(':userID',$userID);

    try{
        $update_query->execute();
        $update_db=null;
        return null;
    }catch(PDOExeption $e){
        $update_db=null;
        return $e -> getMessage();
    }
}
//deleteFlg を０から１にする

function delete_mydata($userID){
    $delete_db = connect2MySQL();  //データベースへの接続を開く
    $delete_sql = "UPDATE user_t SET deleteFlg=:deleteFlg WHERE userID=:userID";
    $delete_query = $delete_db->prepare($delete_sql);
    $delete_query ->bindvalue(':userID',$userID);
    $delete_query ->bindvalue(':deleteFlg',1);
    try{
        $delete_query->execute();
        $delete_db=null;
        return null;
    }catch(PDOExeption $e){
        $delete_db=null;
        return $e -> getMessage();
    }
}
?>
