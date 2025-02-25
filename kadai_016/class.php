<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    class Food
    {
      private $name;
      private $price;

      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    class Animal
    {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height()
      {
        echo $this->height . '<br>';
      }
    }
    $food = new Food('カレーライス', 1000);
    $food->show_price();
    print_r($food);
    echo '<br>';

    $animal = new Animal('キリン', 300, 500);
    $animal->show_height();
    print_r($animal);
    ?>
  </p>
</body>

</html>