<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test00</title>
</head>
<body>
    <!-- formから送られてきたものを$_REQUESTで受け取る -->
    <!-- my_nameでinputのnameと同じ -->
    <!-- jsでいたずらを防ぐためにhtmlspecialcharsをしてブロック第2引数にENT_QUOTESをつける -->
    <?php if (!empty($_REQUEST['my_name'])):?>
      <p>お名前:<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
    <?php endif; ?>
    <!--$_REQUESTはpost getを受け取ることができる.じゃあ$_REQUESTでも良いという考えは間違いで
    postにして$_REQUESTで受け取ると、urlには何も表示されないが、urlを加工するといたずらをする
    ことができるため、$_postで受け取るほうが良い -->
</body>
</html>