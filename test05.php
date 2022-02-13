<?php
//   配列
  date_default_timezone_set('Asia/Tokyo');
  $week_name = ['日', '月', '火', '水', '木', '金', '土'];
//   今日の曜日を数字として取得
  $week = date('w');
  echo "今日は、$week_name[$week]曜日です ";
  echo '<br>';
// 連想配 値とキーを関連付けて代入することができる。
  $fruits = [
    'apple' => 'りんご', 
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];
//   echo $fruits['apple'];
?>
<!-- ここでは$$englishがキー $japaneseが値 -->
<dl>
  <?php foreach ($fruits as $english => $japanese): ?>
  <dt><?php echo $english; ?></dt>
  <dd><?php echo $japanese;?></dd>
  <?php endforeach; ?>
</dl>
<!-- 書き方的にはどちらでもいいが上の方がendforeachを用いて分かりやすい% -->
<?php foreach ($fruits as $english => $japanese){ ?>
  <dt><?php echo $english; ?></dt>
  <dd><?php echo $japanese;?></dd>
  <?php }?>
