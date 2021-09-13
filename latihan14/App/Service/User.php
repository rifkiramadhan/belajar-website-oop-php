<?php namespace App\Service;

    // Membuat class user yang dimiliki oleh namespace App\Service
    class User {
        public function __construct() {
            echo "Ini adalah class " . __CLASS__;
        }
    }

?>