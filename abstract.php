<?php
abstract class alatelektronik{
    abstract public function lihat_spec();
    public static function hidpkan_laptop(){
        echo "hidupkan laptop";
    }
}
class laptop extends alatelektronik{
    public function lihat_spec(){
        return "lihat spec laptop...";
    }
    public function beli_laptop(){
        return "beli laptop...";
    }
}
class henpon extends alatelektronik{
    public function lihat_spec(){
        return "lihat spec hp...";
    }
}
$laptop_baru = new laptop();
echo $laptop_baru->lihat_spec();
echo "<br>";
echo $laptop_baru->beli_laptop();
echo "<br />";
?>