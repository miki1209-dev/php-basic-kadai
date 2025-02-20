<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>

<body>
  <p>
    <?php
    $production_area = [
      'name' => '玉ねぎ',
      'price' => 200,
      'area' => '北海道'
    ];

    foreach ($production_area as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
  </p>
</body>

</html>