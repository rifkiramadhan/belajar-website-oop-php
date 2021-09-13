<?php 
    // Cara untuk mengakses method yang static

    // class ContohStatic {
    //     public static $angka = 1;

    //     public static function halo() {
    //         return "Halo." . self::$angka++ ." Kali.";
    //     }
    // }

    // echo ContohStatic::$angka;
    // echo "<br>";
    // echo ContohStatic::halo();
    // echo "<hr>";
    // echo ContohStatic::halo();

    class Contoh {
        public static $angka = 1;

        public function halo() {
            return "Halo " . self::$angka++ . " Kali. <br>";
        }
    }

    $obj = new Contoh;
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<hr>";

    $obj2 = new Contoh;
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();
?>