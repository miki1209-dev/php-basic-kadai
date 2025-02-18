<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>テストの平均点を計算しよう</title>
</head>

<body>
  <?php
  $score1 = 80;
  $score2 = 60;
  $score3 = 55;
  $score4 = 40;
  $score5 = 100;
  $score6 = 25;
  $score7 = 80;
  $score8 = 95;
  $score9 = 30;
  $score10 = 60;
  ?>
  <p>
    <?php
    $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    echo "スコアの合計点：{$total}";
    echo '<br>';
    $average = $total / 10;
    echo "スコアの平均値：{$average}";
    ?>
  </p>
</body>

</html>