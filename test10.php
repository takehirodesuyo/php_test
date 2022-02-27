<?php
  $zip = '123-4567';
// 正規表現郵便番号とかで検索して解決
  if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)){
      echo "郵便番号" . $zip;
  } else {
      echo "正しく入力してください";
  }

?>