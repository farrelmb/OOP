<?php
class Produk
{
    public
        $nama,
        $harga,
        $jumlah;

    public function __construct($nama, $harga, $jumlah)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlah = $jumlah;    
    }

    public function __destruct()
    {
        echo "Kamu membeli {$this->nama}, harganya {$this->harga}, sebanyak {$this->jumlah} <br>";
    }
}

new Produk('Laptop', 999, 5);
new Produk('Jawa', 500, 5);