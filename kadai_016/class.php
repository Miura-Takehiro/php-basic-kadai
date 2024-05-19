<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food
    {
      public $name;
      public $price;

      // メソッド定義
      public function set_price(int $price)
      {
        $this->price = $price;
      }
      public function show_price()
      {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal
    {
      public $name;
      public $weight;
      public $height;

      // メソッド定義
      public function set_height(int $height)
      {
        $this->height = $height;
      }
      public function show_height()
      {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    // インスタンス化する
    $Food = new Food('potato', 250);
    $Animal = new Animal('dog', 60, 5000);

    // 出力
    print_r($Food);
    echo  '<br>';
    print_r($Animal);
    echo  '<br>';
    $Food->show_price();
    $Animal->show_height();

    ?>
  </p>
</body>

</html>