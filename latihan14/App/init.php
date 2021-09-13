<?php 

    // Memanggil File PHP Yang Terpisah
    // require_once 'Produk/InfoProduk.php';
    // require_once 'Produk/Produk.php';
    // require_once 'Produk/Komik.php';
    // require_once 'Produk/Game.php';
    // require_once 'Produk/CetakInfoProduk.php';
    // require_once 'Produk/User.php';

    // require_once 'Service/User.php';

    // Membuat fungsi closure untuk melihat ada class apa saja yang teregistrasi dalam folder produk
    spl_autoload_register(function( $class ) {
        // Mengambil class user berdasarkan backslash dari folder App\Produk\User = ["App", "Produk", "User"]
        $class = explode('\\', $class);
        $class = end($class);

        // Jika ada maka tangkap seluruh class nya dengan cara pemanggilan yang lengkap
        require_once  __DIR__ . '/Produk/' . $class . '.php';
    });

    spl_autoload_register(function( $class ) {
        // Mengambil class user berdasarkan backslash dari folder App\Produk\User = ["App", "Produk", "User"]
        $class = explode('\\', $class);
        $class = end($class);
        

        // Jika ada maka tangkap seluruh class nya dengan cara pemanggilan yang lengkap
        require_once  __DIR__ . '/Service/' . $class . '.php';
    });
    
?>