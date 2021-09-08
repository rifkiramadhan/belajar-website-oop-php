<?php 

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
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Uncharted", "Masashi Kishimoto", "Shonen Jump", 30000);
    
    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";

    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);
?>