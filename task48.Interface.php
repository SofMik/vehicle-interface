<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class / Interface</title>
</head>
<body>
<?php
echo "<h3>Версия с кожаным салоном и сигналом!</h1>";
    interface Movable {
    public function moveForward();
    public function moveBackward();
}

abstract class Vehicle implements Movable {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function specialAbility();

    public function getName() {
        return $this->name;
    }
    public function honk() {
        echo "$this->name сигналит: БИ-БИ! <br>";
    }
    public function useWipers() {
        echo "$this->name включает дворники: ШШШ...<br>";
    }
}

class Car extends Vehicle {
    private $hasLeatherInterior = true;
    public function moveForward() {
        echo "$this->name едет вперёд<br>";
    }
    public function moveBackward() {
        echo "$this->name сдаёт назад<br>";
    }

    public function specialAbility() {
        echo "$this->name включает закись азота!<br>";
        if ($this->hasLeatherInterior) {
            echo "$this->name имеет кожаный салон.<br>";
        }
    }
}
class Bulldozer extends Vehicle {
    public function moveForward() {
        echo "$this->name грохочет вперёд<br>";
    }

    public function moveBackward() {
        echo "$this->name гремит назад<br>";
    }

    public function specialAbility() {
        echo "$this->name размахивает ковшом! <br>";
    }
}
function activateVehicle(Vehicle $v) {
    echo "=== {$v->getName()} активирован ===<br>";
    $v->moveForward();
    $v->honk();
    $v->useWipers();
    $v->specialAbility();
    echo "<br>";
}
$myCar = new Car("Суперкар");
$dozer = new Bulldozer("Бульдозер-9000");

activateVehicle($myCar);
activateVehicle($dozer);

?>
</body>
</html>
