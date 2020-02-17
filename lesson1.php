<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Tasks 1-4</h3><br>";
    /**
     * Tasks 1-3
     */
    class Product {
        public $id;
        public $name;
        public $price;
        public $description;
        public $count;

        public function info() {
            echo <<<php
                <p>
                    Id = $this->id, name of it $this->name, its price $this->price, left $this->count
                </p>
                php;
        }

        function __construct($id, $name, $price, $description, $count)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->description = $description; 
            $this->count = $count;           
        }
    }

    /**
     * Наследние класса Task 4
     */
    class Food extends Product
    {
        public $storageTemperature;


        public function typeOfStorage()
        {
            if($this->storageTemperature < 15){
                echo "Требуется хранить в холодильнике";
            } else echo "можно хранить при комнатной температуре";
        }

        function __construct($id, $name, $price, $description, $count, $storageTemperature)
        {
            parent::__construct($id, $name, $price, $description, $count);
        }
    }

    $shoes = new Product(1, "Бутсы", "4000", "Good shoes for playing football", 7);
    $shoes->info();

    $cheese = new Food(2,"Российский", "350", "Вкусный сыр", 23, 14);
    $cheese->info();
    $cheese->typeOfStorage();


    /**
     * Task 5 -- Что выведет код?
     */

    echo "<hr>";
    echo "<h3>Tasks 5</h3><br>";
    class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    $a1 = new A();
    $a2 = new A();
    echo "Вызов 1 <br>";
    $a1->foo();  // вывод 1
    echo "<br>Вызов 2 <br>";
    $a2->foo();  // вывод 2
    echo "<br>Вызов 3 <br>";
    $a1->foo();  // вывод 3
    echo "<br>Вызов 4 <br>";
    $a2->foo();  // вывод 4
    // Так происходит, так как из-за команды static переменная сохраняется после завершения функции

    echo "<hr>";
    /**
     * Task 6,7
     */
    echo "<h3>Task 6-7</h3><br>";

    class C {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    class B extends C {
    }
    $a1 = new C;
    $b1 = new B;
    echo "<br>Вызов 1 <br>";
    $a1->foo(); //Вывод 1
    echo "<br>Вызов 2 <br>";
    $b1->foo(); //Вывод 1
    echo "<br>Вызов 3 <br>";
    $a1->foo(); //Вывод 2
    echo "<br>Вызов 4 <br>";
    $b1->foo(); //Вывод 2

    // Так происходит, потому что наследование приводит к созданию нового метода
?>
</body>
</html>