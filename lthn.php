<?php
class sekul
{
    public
        $nama,
        $rmbl,
        $ryn;

    public function __construct($nama, $rmbl, $ryn)
    {
        $this->nama=$nama;
        $this->rmbl=$rmbl;
        $this->ryn=$ryn;
    }    
    public function __destruct()
    {
        echo "nama saya {$this->nama}, rombel {$this->rmbl}, rayon {$this->ryn} <br>";
    }
}
new sekul('farrel ganteng', 'pplg', 'ciawi 6');
?>