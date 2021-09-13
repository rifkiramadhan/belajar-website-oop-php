<?php 

    // Class game mewarisi kelas method dan properti kelas produk dan juga mengimplementasikan interface info produk
    class Game extends Produk implements InfoProduk {
        public $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
        $waktuMain = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );
            $this->waktuMain = $waktuMain;
        }

        // Untuk mengambil informasi dari produk
        public function getInfo() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }

        public function getInfoProduk() {
            $str = " Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam . ";
            return $str;
        }
    }

?>