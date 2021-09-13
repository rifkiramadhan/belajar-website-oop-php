<?php 

    // Membuat class untuk mencetak informasi produk dan menerima inputan object
    class CetakInfoProduk {

        public $daftarProduk = array();

        public function tambahProduk( Produk $produk ) {
            $this->daftarProduk[] = $produk;
        }

        // Fungsi cetak hanya menerima parameter yang jenisnya class produk lalu objectnya produk
        public function cetak() {
            $str = "DAFTAR PRODUK : <br>";

            foreach( $this->daftarProduk as $p ) {
                $str .= "- {$p->getInfoProduk()} <br>";
            }

            return $str;
        }
    }

?>