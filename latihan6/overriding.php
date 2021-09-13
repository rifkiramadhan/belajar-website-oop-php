<?php 
    // Melakukan Pendekatan Dengan Inheritance
    // Cara ini masih redundan atau kita melakukan hal yang sama secara berulang, seharusnya tidak begitu

    // Jualan Produk
    // 1. Komik
    // 2. Game

    // Membuat class Produk
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }
    }

    // Membuat class komik yang extends ke produk
    class Komik extends Produk {
        public $jmlHalaman;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
        $jmlHalaman = 0 ) {

            parent::__construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman );

            $this->jmlHalaman = $jmlHalaman;

        }

        // Membuat fungsi untuk info produk komik saja
        public function getInfoProduk() {
            $str = " Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman . ";

            return $str;
        }
    }

    class Game extends Produk {
        public $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
        $waktuMain = 0 ) {
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk() {
            $str = " Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam . ";

            return $str;
        }
    }

    // Membuat class untuk mencetak informasi produk dan menerima inputan object
    class CetakInfoProduk {
        // Fungsi cetak hanya menerima parameter yang jenisnya class produk lalu objectnya produk
        public function cetak( Produk $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

            return $str;
        }
    }

    /* 
     * Setiap produk3 di instansiasi atau dibuat objectnya dan isinya dikirim lalu diterima oleh constructor lalu di
     * pakai untuk mengganti propertynya
     */
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
    
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 Jam

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

?>