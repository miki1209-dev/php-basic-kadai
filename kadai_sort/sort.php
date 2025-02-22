<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>
  <p>

  </p>
  <p>
    <?php
    $numbers = [15, 4, 18, 23, 10];
    $message = '';

    function sort_2way($array, $order)
    {
      if ($order === true) {
        sort($array);
        $message = '昇順でソートします';
      } else {
        rsort($array);
        $message = '降順でソートします';
      }

      echo "{$message}<br>";

      foreach ($array as $num) {
        echo "{$num}<br>";
      }
    }

    sort_2way($numbers, true);
    sort_2way($numbers, false);
    ?>
  </p>
</body>

</html>