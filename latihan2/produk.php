<?php 

    // Jualan Produk
    // 1. Komik
    // 2. Game

    // Membuat class Produk
    class Produk {
        public $judul = "Judul",
               $penulis = "Penulis",
               $penerbit = "Penerbit",
               $harga = 0;

        // Jika fungsinya dipanggil maka dia mengembalikan string hello world!
        // public function sayHello() {
        //     return "Hello World!";
        // }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    // Membuat sebuah object berdasarkan blueprint dari class Produk
    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    // $produk2 = new Produk();
    // $produk2->judul = "Uncharted";
    // $produk2->tambahProperty = "Hahaha";
    // var_dump($produk2);

    // Cara ini agak merepotkan karena harus mengulang menuliskan property produk berturut-turut
    // Membuat sebuah instance dengan property lengkap
    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Masashi Kishimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;
    
    echo "Komik : $produk3->penulis, $produk3->penerbit";
    echo "<br>";

    // Mencetak method ke layar
    // echo $produk3->sayHello();
    echo $produk3->getLabel();
    echo "<hr>";

    $produk4 = new Produk();
    $produk4->judul = "Uncharted";
    $produk4->penulis = "Neil Druckman";
    $produk4->penerbit = "Sony Computer";
    $produk4->harga = 250000;

    echo "Komik : " . $produk3->getLabel();
    echo "<br>";

    echo "Game : " . $produk4->getLabel();
?>