<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
<p>
  <?php
    // Foodクラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // プロパティにアクセスし、値を出力する
      public function show_price() {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // Animalクラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // プロパティにアクセスし、値を出力する
      public function show_height() {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // $foodインスタンスの各プロパティの値を出力する
    print_r($food);
    echo '<br>';

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);

    // $animalインスタンスの各プロパティの値を出力する
    print_r($animal);
    echo '<br>';

    // $foodインスタンスのメソッドにアクセスして実行する
    $food->show_price();

    // $animalインスタンスのメソッドにアクセスして実行する
    $animal->show_height();
  ?>
</p>
</body>

</html>