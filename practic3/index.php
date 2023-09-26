<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Validation</title>
</head>
<body>
    <div class="back_container">
        <div class="back">
        </div>
        <div class="container">
        <?php
class Animal
{
    public $weight;
    public $age;
    public $color;

    public function __construct($weight, $age, $color)
    {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }
}
?>
        <?php
class Lion extends Animal
{
    public $maneColor;

    public function __construct($weight, $age, $color, $maneColor)
    {
        parent::__construct($weight, $age, $color);
        $this->maneColor = $maneColor;
    }

    public function displayInfo()
    {
        echo "🦁 Lion:\n";
        echo ' <br/>';
        echo "Масса: " . $this->weight . " кг\n";
        echo ' <br/>';
        echo "Лет: " . $this->age . " годы\n";
        echo ' <br/>';
        echo "Цвет: " . $this->color . "\n";
        echo ' <br/>';
        echo "Цвет гривы: " . $this->maneColor . "\n";
    }
}
?>
        <?php
class Rabbit extends Animal
{
    public $earLength;

    public function __construct($weight, $age, $color, $earLength)
    {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function displayInfo()
    {
        echo "🐇 Rabbit:\n";
        echo ' <br/>';
        echo "Масса: " . $this->weight . " кг\n";
        echo ' <br/>';
        echo "Лет: " . $this->age . " годы\n";
        echo ' <br/>';
        echo "Цвет: " . $this->color . "\n";
        echo ' <br/>';
        echo "Длина уха: " . $this->earLength . " см\n";
    }
}
?>
        <?php
class Wolf extends Animal
{
    public $packSize;

    public function __construct($weight, $age, $color, $packSize)
    {
        parent::__construct($weight, $age, $color);
        $this->packSize = $packSize;
    }

    public function displayInfo()
    {
        echo "🐺 Wolf:\n";
        echo ' <br/>';
        echo "Масса: " . $this->weight . " кг\n";
        echo ' <br/>';
        echo "Лет: " . $this->age . " годы\n";
        echo ' <br/>';
        echo "Цвет: " . $this->color . "\n";
        echo ' <br/>';
        echo "Размер: " . $this->packSize . "\n";
    }
}
?>
        <div class="animal">
        <?php
$lion = new Lion(200, 5, "золотой", "темно коричневый");

$lion->displayInfo();
?>
        <img src="img/img1.jpg" alt="лев">
        </div>

        <div class="animal">
        <?php
$rabbit = new Rabbit(2, 1, "белый", 15);

$rabbit->displayInfo();
?>
        <img src="img/img2.jpg" alt="кролик">
        </div>

        <div class="animal">
        <?php
$wolf = new Wolf(60, 3, "серый", 8);

$wolf->displayInfo();
?>
        <img src="img/img3.jpg" alt="волк">
        </div>
        </div>
    </div>
    <div class="footer">
    </div>
</body>
</html>