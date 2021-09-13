<?php 

    // Cara 1 Menggonakan Constanta Dalam Class
    // class Coba {
    //     const NAMA = "Rifki Ramadhan";
    // }

    // echo Coba::NAMA;

    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";

    function Coba() {
        return __FUNCTION__;
    }
    echo Coba();

    echo "<br>";

    class CobaLagi {
        public $kelas = __CLASS__;
    }
    $obj = new CobaLagi;
    echo $obj->kelas;
?>