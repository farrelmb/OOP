<?php
class Komputer {
    private $jenis_processor = "Intel Core i7-4790 3.6hz";

    public function tampilkan_processor(){
        echo $this->jenis_processor;
    }
    public function getjenis(){
        echo $this->jenis_processor;
    }
}
$komputer_baru = new Komputer();

echo $komputer_baru->tampilkan_processor();
echo "<br>";
echo $komputer_baru->getjenis();
?>