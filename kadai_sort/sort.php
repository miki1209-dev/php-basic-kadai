<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>
  <p>
    <?php
    $numbers = [15, 4, 18, 23, 10];

    function sort_2way($array, $order)
    {
      $numbers_copy = $array;
      $message = '';
      if ($order === true) {
        sort($numbers_copy);
        $message = '昇順でソートします';
      } else {
        rsort($numbers_copy);
        $message = '降順でソートします';
      }

      echo "{$message}<br>";

      foreach ($numbers_copy as $number) {
        echo "{$number}<br>";
      }
    }

    sort_2way($numbers, true);
    sort_2way($numbers, false);
    ?>
  </p>
</body>

</html>