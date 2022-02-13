<?php
// ?intは指定しなくても良いという意味
date_default_timezone_set('Asia/Tokyo');

  $time = strtotime('+0 day');
  $day = date('n/j(D)', $time);
  echo $day . '<br>';

  $time = strtotime('+1 day');
  $day = date('n/j(D)', $time);
  echo $day . '<br>';

  //iという変数を定義しているだけで$iが処理になくてもよい
  //回数を表したいだけ

  //シングルクォーテーションの場合は何が入っていてもそのまま表示
  //ダブルクォーテーションは変数を展開して表示
  for($i=0; $i<366; $i++){
      $time = strtotime('+' . $i . 'day');
      $day = date('n/j(D)', $time);
      echo $day . '<br>';
  }
?>