<?php
class lptp
{
    public
        $laptop,
        $nama;

    public function __construct($laptop, $nama)

    {
        $this->laptop = $laptop;
        $this->nama = $nama;
    }
        public function show()
        {
            echo "laptop $this->laptop milik: <b>$this->nama</b> <br>";
        }
}

$lap1 = new lptp('1', 'Farrel');
echo $lap1->show();

$lap2 = new lptp('2', 'Banyu');
echo $lap2->show();

$lap3 = new lptp('3', 'Farhan');
echo $lap3->show()
?>