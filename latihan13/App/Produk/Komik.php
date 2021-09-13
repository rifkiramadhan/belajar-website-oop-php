<?php 

    // Membuat class komik yang extends ke produk
    class Komik extends Produk implements InfoProduk {
        public $jmlHalaman;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
        $jmlHalaman = 0 ) {

            parent::__construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman );
            $this->jmlHalaman = $jmlHalaman;

        }
        
        // Untuk mengambil informasi dari produk
        public function getInfo() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }

        // Membuat fungsi untuk info produk komik saja
        public function getInfoProduk() {
            $str = " Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman . ";
            return $str;
        }
    }

?>