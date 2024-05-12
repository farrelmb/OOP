<?php
class Toko {
    protected function beli() {
        return "Yey beli baru! <br>";
    }
}
class Laptop extends Toko {
    public function beli_laptop() {
        return $this->beli();
    }
}
class Komputer extends Laptop {
    public function getyey() {
        return $this->beli_laptop();
    }
}

$laptop_baru = new Laptop();
$toko = new Toko();
$komputer = new Komputer();
echo $laptop_baru->beli_laptop();
echo $komputer->getyey();
?>