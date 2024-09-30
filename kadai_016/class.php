<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        class food
        {
            private $name;
            private $price;

            public function __construct(string $name, string $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price()
            {
                echo "The price is " . $this->price . "<br>";
            }
        }

        class animal
        {
            private $name;
            private $height;
            private $weight;

            public function __construct($name, $height, $weight)
            {


                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height()
            {
                echo "The height is " . $this->height . "<br>";
            }
        }

        $potato = new food("potato", 250);
        $dog = new animal("dog", 60, 5000);

        print_r($potato);
        print_r($dog);

        $potato->show_price();
        $dog->show_height();

        ?>


    </p>
</body>

</html>