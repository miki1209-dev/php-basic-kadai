<?php
$employee_data = [
  'employee_name' => $_POST['employee_name'],
  'employee_age' => $_POST['employee_age'],
  'department' => $_POST['department']
];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員情報入力フォームを作成しよう</title>
</head>

<body>
  <h2>入力内容をご確認ください</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください</p>

  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $employee_data['employee_name']; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $employee_data['employee_age']; ?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $employee_data['department']; ?></td>
    </tr>
  </table>
  <p>
    <input type="submit" value="確定" onclick="location.href='complete.php'">
    <input type="submit" value="キャンセル" onclick="history.back();">
  </p>
</body>

</html>