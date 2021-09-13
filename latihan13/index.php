<?php 

    // Memanggil File init PHP Untuk Memanggil Semua Class Yang Tersedia
    require_once 'App/Init.php';

    /* 
     * Setiap produk3 di instansiasi atau dibuat objectnya dan isinya dikirim lalu diterima oleh constructor lalu di
     * pakai untuk mengganti propertynya
     */
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
    
    // Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 Jam

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk( $produk1 );
    $cetakProduk->tambahProduk( $produk2 );

    echo $cetakProduk->cetak();

    echo "<hr>";

    new Coba();
?>