<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
  </head>

  <body>
    <p>
      <?php
      //Foodクラス
      class Food {
        private $name;
        private $price;

        //コンストラクタ
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        //メソッド
        // public function set_price(int $price) {
        //   $this->price = $price;
        // }
        public function show_price() {
          echo $this->price . '<br>';
        }
      }

      //Animalクラス
      class Animal {
        private $name;
        private $height;
        private $weight;

        //コンストラクタ
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        //メソッド
        // public function set_height(int $height) {
        //   $this->height = $height;
        // }
        public function show_height() {
          echo $this->height . '<br>';
        }
      }
      
      //インスタンス化
      $food = new Food('potato', 250);
      $animal = new Animal('dog', 60, 5000);

      print_r($food);
      print_r($animal);
      echo '<br>';

      // $food->set_price(250);
      $food->show_price();

      // $animal->set_height(60);
      $animal->show_height();
      ?>
    </p>
  </body>
</html>