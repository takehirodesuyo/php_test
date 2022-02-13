<?php
  date_default_timezone_set('Asia/Tokyo');
  $week_name = ['日', '月', '火', '水', '木', '金', '土'];
  $week = date('w');
  echo "今日は、$week_name[$week]曜日です ";
?>