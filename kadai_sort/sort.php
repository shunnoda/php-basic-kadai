<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  function sort_2way($order) {

    $array = [15, 4, 18, 23, 10];

    if ($order === true) {
      echo '昇順にソートします。' . '<br>';

      // 引数$orderの値がtrueであれば、昇順にソートする
      sort($array);
    } else {
      echo '降順にソートします。' . '<br>';

      // 引数$orderの値がfalseであれば、降順にソートする
      rsort($array);
    }

    // 配列$arrayの要素を1つずつ順番に出力する
    foreach ($array as $value) {
      echo $value . '<br>';
    }
  }

  // 関数を呼び出す（1回目）
  sort_2way(true);

  // 関数を呼び出す（2回目）
  sort_2way(false);
  ?>
</p>
</body>

</html>