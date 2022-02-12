<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  // エスケープシーケンス同じ記号を使いたい場合
    echo 'I \'m studying';
  // クォーテーション記号を書かない場合は、中身を処理
    echo 123+2*3;
  // 日時
    date_default_timezone_set('Asia/Tokyo');
    echo date("l");
  //文字列連結.でつなぐことができる
    echo "現在は、" . date('G時 i分 s秒') . "です";
  //オブジェクト
    // ここわからん
    $today = new DateTime();
    $today->setTimezone(new DateTimeZone('Asia/Tokyo'));
    echo '現在は、' . $today->format('G時 i分 s秒') . 'です';
  //
  
  ?>


</body>
</html>