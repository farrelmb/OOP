<?php
class lptp{
    public $pmlk;
    public function __construct($pmlk){
        $this->pemilik = $pmlk;
    }
    public function getPmlk() {
        return $this->pemilik;
    }
}

$laptop1 = new lptp("ryo");
$laptop2 = new lptp("rio");
$laptop3 = new lptp("io");

echo "laptop 1 milik: " . $laptop1->getPmlk() . "<br>";
echo "laptop 2 milik: " . $laptop2->getPmlk() . "<br>";
echo "laptop 3 milik: " . $laptop3->getPmlk() . "<br>";
?>
<br>


<!-- banyu -->
<?php

class Laptop
{
    public $name;
    public $brand;

    public function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }

    public function show()
    {
        echo "laptop <b>$this->brand</b> adalah milik : <b>$this->name</b> <br>";
    }
}

$lap1 = new Laptop('Kafka', 'Samsung');
echo $lap1->show();

$lap2 = new Laptop('Banyu', 'Asus');
echo $lap2->show();

$lap3 = new Laptop('Ican', 'Toyota');
echo $lap3->show();