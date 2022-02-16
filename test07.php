<?php
//   xmlファイルを読み込む
  $xmlTree = simplexml_load_file('rss.xml');
  echo $xmlTree->channel->title;
?>