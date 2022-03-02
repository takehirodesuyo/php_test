<?php 
// ここ全角
  $age = '２３';
  
// 全角を半角に変換する
// 第2引数で使用可能なオプション指定
  $age = mb_convert_kana($age, 'n', 'UTF-8');
// is_numericは数字かどうかの判定をする
  if(is_numeric($age)){
      echo $age . '歳です';
  } else {
      echo '数字で入力してください';
  }
?>