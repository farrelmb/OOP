<?php
// class web {
//     const NAMA_WEB = "myweb.com";
// }
// echo web::NAMA_WEB;
// ?>

 <?php
// class web {
//     public static $title = "my page";
// }
// echo web::$title
// ?>

<?php
// class web {
//     public static $title = "my page";

//     public function changeTitle() {
//         self::$title = 'my page2';
//         return self::$title;
//     }
//     public function changeTitle2() {
//         return self::$title;
//     }
// }
// class Yourweb extends web {
//     public function changeTitle() {
//         self::$title = 'your page';
//         return self::$title;
//     }
// }
// echo web::$title . "<br>";
// $myweb = new web;
// echo $myweb->changeTitle() . "<br>" .
// $myweb->changeTitle2();
// echo "<br>";
// $yourweb = new Yourweb;
// echo $yourweb->changeTitle() . "<br>" .
// $myweb->changeTitle2();
?>

<?php
// class web {
//     public static $title = "First page";

//     public static function getTitlePage(){
//         return "nama halaman ini adalah' " . self::$title." '";
//     }
// }
// echo web::$title;
// echo "<br>";
// echo web::getTitlePage();
?>

<?php
// class web {
//     protected static $title = "first page";

//     public static function getTitlePage() {
//         echo "nama halaman ini adalah '" . self::$title . " '"; 
//     }
// }

// class otherweb extends web  {
//     public function __construct() {
//         web::getTitlePage();
//     }
//     public function getTitle() {
//         return web::$title;
//     }
// }
// $otherweb = new Otherweb;
// echo "<br>";
// echo $otherweb->getTitle();
// ?>

<?php
class web {
    protected static $title= "First Page";

    protected static function getTitlePage(){
        echo " nama halaman ini adalah '" .self::$title."'";
}
}

class Other2web extends web {
    public function __construct(){
        web::getTitlePage();
    }
}

new Other2web;

?>