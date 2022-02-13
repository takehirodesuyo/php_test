<?php
$time = date('G');
?>

<?php if($time < 19):?>
  <p>営業時間外です</p>
<?php else: ?>  
  <p>ようこそ</p>
<?php endif; ?>

<?php 
echo floor(100 / 3000 * 100);
echo '<br>';
?>
<?php
// 文字列をフォーマット化するファンクション
  $date = sprintf('%04d-%02d-%02d', 21, 5, 9);
  echo $date;
  echo '<br>';
  
  $success = file_put_contents('data/test2.txt',
  'ホームページをリニューアルしました。');
  
  if ($success != false) {
      echo 'ファイルの読み込みが完了しました。';
  } else {
      echo 'ファイルの読み込みに失敗しました。';
  }
//   ファイル読み込み
  $news = file_get_contents('data/test.txt');
  echo $news;
// ファイルの追記
  $news = $news . "追加のニュースです";
  $false = file_put_contents('data/test.txt', $news);


// このファンクションは変数に入れなくても画面に出力することができる。
  readfile('data/news.txt');


?>

