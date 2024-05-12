<?php
class how
{
    public
        $nama,
        $merek;

    public function __construct($nama, $merek)
    {
        $this->nama = $nama;
        $this->merek = $merek;
    
        echo "ini berasal dari Contructor Laptop <br>";
    }
    public function hidupkanLaptop()
    {
        echo "Hidupkan Laptop $this->merek punya $this->nama <br>";
    }
    public function __destruct()
    {
        echo "Ini berasal dari Destructor Laptop <br> Objek Telah Dihancurkan";
    }
} 
$produk = new how('andi', 'Lenovo');
$produk->hidupkanLaptop()

?>