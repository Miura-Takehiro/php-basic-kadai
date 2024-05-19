<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php

    function sort_2way($array, $order)
    {
      // ソート方向がTRUE（昇順）の場合
      if ($order == true) {
        echo "昇順にソートします。<br>";
        sort($array);
        foreach ($array as $num) {
          echo $num . "<br>";
        }
      }
      // ソート方向がFALSE（降順）の場合
      else {
        echo "降順にソートします。<br>";
        rsort($array);
        foreach ($array as $num) {
          echo $num . "<br>";
        }
      }
    }

    $nums = [15, 4, 18, 23, 10];

    // 昇順でソート
    sort_2way($nums, $order = true);

    // // 降順でソート
    sort_2way($nums, $order = false);
    ?>
  </p>
</body>

</html>