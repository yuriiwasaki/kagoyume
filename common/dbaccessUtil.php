<?php
//新規会員登録の機能
//DBへの接続を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=kagoyume_db;charset=utf-8',
                            DB_USER,DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e){
            return 'DB接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage();
        }

    }
    //dbに全項目のあるレコードを挿入する
function Insert_user_t($register){/*引数は登録ユーザーの各情報の連想配列。キーがそれぞれの値の情報になっている*/
    $insert_db = connect2MySQL();//データベースへの接続を開く
    $insert_sql = "INSERT INTO user_t(password,name,mail,address,newDate)"."VALUES(:password,:name,:mail,:address,:newDate)";
    $datatime = new datetime();
    $date = $datatime->format('Y-m-d H:i:s');//変数$dateにformatで指定した形に変換した現在時刻を代入
    $insert_query =$insert_db->prepare($insert_sql);//SQL文をprepareコンテナに代入

    /*prepareコンテナに代入したSQL文の足りない情報を補完するために
    SQLのパラメーターに登録情報の配列から該当する値を取り出して挿入*/
    $insert_query->bindValue(':password',$register['password']);
    $insert_query->bindValue(':name',$register['name']);
    $insert_query->bindValue(':mail',$register['mail']);
    $insert_query->bindValue(':address',$register['address']);
    $insert_query->bindValue(':newDate',$date);


    }
    try{
        $insert_query->execute();
        $insert_db=null;
        return null;
    } catch (PDOExeption $e) {
        $insert_db=null;
        return $e -> getMessage();
    }
?>
