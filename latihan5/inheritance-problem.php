<?php 

    // Jualan Produk
    // 1. Komik
    // 2. Game

    // Membuat class Produk
    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga,
               $jmlHalaman,
               $waktuMain,
               $tipe;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
        $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;

        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap() {
            // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            // Jika tipenya komik
            if( $this->tipe == "Komik" ) {
                $str .= " - {$this->jmlHalaman} Halaman . ";
            } else if ( $this->tipe == "Game" ) {
                $str .= " - {$this->waktuMain} Jam . ";   
            }

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
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
    $produk2 = new Produk("Uncharted", "Masashi Kishimoto", "Shonen Jump", 30000, 0, 50, "Game");
    
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 Jam

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

?>