<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題16章</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food{
            // プロパティを定義する
            private $name;
            private $price;

            // メソッドを定義する
            public function show_price(){
                echo $this->price.'<br>';
            }

            // コンストラクタを定義する
            public function __construct($name, $price){
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal{
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            public function show_height(){
                echo $this->height.'<br>';
            }

            // コンストラクタを定義する
            public function __construct($name, $height, $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
            // インスタンス化する
            $food = new Food('potate', 250);
            // インスタンス$userの各プロパティの値を出力する
            print_r($food);
            echo '<br>';

            // インスタンス化する
            $animal = new Animal('dog', 60, 5000);
            // インスタンス$userの各プロパティの値を出力する
            print_r($animal);
            echo '<br>';


            $food->show_price();
            $animal->show_height();

        ?>
    </p>
    
</body>
</html>