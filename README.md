# Belajar Dasar OOP Pada PHP

## Apa Object Oriented Programming ?
### OOP
    - Object Oriented Programming ini merupakan gaya pemrograman atau programming style atau ada juga yang menyebutnya
      paradigma pemrograman, jadi cara kita menuliskan kode program kita

### Procedural Programming
    - Instruksi dilakukan langkah demi langkah
      - Pada saat kita membuat programnya semua baris instruksinya kita buat langkah demi langkah, Jadi runut dalam satu
        halaman kita dapat tulis langkah-langkahnya seperti apa
    - Memecah program menjadi bagian-bagian kecil
      - Dengan menggunakan prosedural programming kita berusaha untuk melakukan modularisasi dengan cara memecah program
        kita menjadi bagian-bagian yang kecil, misalnya kita memiliki file function nah didalam file function tersebut
        banyak sekali fungsi-fungsi yang kita buat untuk mengerjakan tugas tertentu
    - Disebut prosedur, subroutine atau function
      - Bagian-bagian yang kecil tadi dibahasa pemrograman prosedural lainnya itu disebutnya bukan function, tapi prosedur
        atau subroutine
    - Linear / Top-to-Bottom
      - Prosedural juga disebut dengan linear, dimana program dibaca dari atas kebawah 
    - Fortran, ALGOL, COBOL, Pascal, C, PHP, Javascript
      - Untuk bahasa-bahasa pemrograman yang menggunakan gaya programming prosedural itu yang tertera diatas ini, karena
        beberapa dari bahasa ini bisa menggunakan prosedural atau object oriented
      - Seperti PHP dan Javascript kita bisa menuliskan gaya pemrograman prosedural ataupun object oriented
      - Dan seperti bahasa C itu hanya khusus untuk ditulis dengan gaya pemrograman prosedural

### Kelebihan Procedural Programming
    - To-the-point
      - Bahasa pemrograman prosedural itu cenderung to the point, jadi kita bisa langsung melakukan apa yang kita mau
        dengan menuliskan baris-baris tertentu
      - Ini berbeda dengan bahasa pemrograman object oriented dimana kita harus menuliskan atau mendefinisikan sesuatu
        terlebih dahulu sebelum kita mau melakukan sesuatu
    - Simplicity & kemudahan implementasi (untuk compiler & interpreter)
      - Dari sisi simplicity nya, kemudahan untuk dibaca dan dikelola oleh interpreter maupun compiler, jadi dengan
        simple misalkan kita menulis echo hello world, nah itu langsung dikerjakan oleh compiler dan hasilny akan
        ditampilkan ke layar
    - Mudah ditelusuri
      - Karena dia linear itu nanti mudah untuk menelusurinya, jika ada error nanti pesan kesalahannya akan langsung
        mentarget area kesalahannya, misalkan error terdapt dibaris keberapa
    - Membutuhkan lebih sedikit memory (dibanding dengan OOP)
      - Karena di to the point tadi maka membutuhkan lebih sedikit memory pada saat proses eksekusinya dibanding dengan
        menggunakan Object Oriented PHP, karena dengan menggunakan Object Oriented ada banyak hal yang harus di load 
        terlebih dahulu ke dalam memory sebelum kita bisa mengerjakan sesuatu
    - Menyusun semua kode program dan struktur data sebagai objek
      - Dengan menggunakan object oriented programming kita akan menyusun kode program ke dalam object-object, jadi
        nanti semuanya akan kita anggap sebagai sebuah object
    - Objek adalah unit dasar dari program
      - Karakteristik object merupakan unit dasar pembentuk dari program, karena semua dibuat dari object maka objectlah
        yang akan memiliki peranan penting
    - Objek menyimpan data dan perilaku
      - Didalam object itu kita bisa menyimpan data serta perilaku dari program kita, jadi kita cenderung tidak memiliki
        lagi variabel dan function, tapi kita punya data dan perilaku atau behaviour yang itu kita sebut sebagai property,
        dan method
    - Objek bisa saling berinteraksi
      - Kita akan membuat banyak object dan object itu akan saling berinteraksi
    - Java, Ruby, Phthon, C++, Javascript, PHP5+
      - Ini merupakan beberapa bahasa pemrograman yang menggunakan paradigma object oriented

### Kelebihan Object Oriented Programming
    - Representasi dunia nyata
      - Dengan menggunakan paradigma object oriented kita akan lebih mudah untuk merepresentasikan sesuatu yang ada di
        dunia nyata yang nantinya akan menjadi kebutuhan dari program, misalnya ingin mendefinisikan user nanti kita akan
        lebih mudah untuk merepresentasikan menggunakan object daripada kita menggunakan prosedural
    - Enkapsulasi & Abstraksi Data
      - Ini adalah kekuatan object oriented, Enkapsulasi memungkinkan data yang kita buat itu aman dari sisi tidak bisa
        diakses oleh bagian lain di program kita, dan Abstraksi data itu dengan object oriented kita akan mudah untuk
        menyembunyikan kerumitan dari program kita karena akan dibuat object-object 
    - Reusability
      - Dimana kita dapat dengan mudah untuk mengguna ulang bagian-bagian dari program yang telah dibuat
    - Skalabilitas & Ekstensibilitas
      - Dengan menggunakan object oriented ini akan memudahkan pengembang aplikasi ketika programnya menjadi lebih besar,
        jika kita menggunakan prosedural itu cenderung lebih sulit karena semuanya biasanya disimpan dalam satu tempat
    - Kemudahan pengelolaan
      - Mudah untuk dikelola
    - Kolaborasi
      - Misalkan ingin bekerja dengan team dan sudah banyak orang yang mengerjakan satu project itu rasanya akan lebih
        mudah ketika kita membuat programnya menggunakan pradigma object oriented
    - Digunakan oleh framework
      - Konsep object oriented khususnya di PHP digunakan oleh framework PHP, ini juga salah satu tujuan kenapa kita
        terlebih dahulu mempelajari seire konsep object oriented sebelum masuk kedalam pembelajarn framework PHP

## Procedural VS Object Oriented ?
### Kelebihan
    - Tidak ada yang lebih bagus karena masing-masing memiliki fokusnya sendiri-sendiri, jika ingin membuat program yang
      simple dan dikerjakan oleh sendiri itu rasanya lebih tepat memilih paradigma pemrograman Procedural
    - Ketika ingin membuat program yang besar skalanya apabila dikerjakan oleh banyak orang itu mungkin object oriented
      lebih cocok

### Konsep OOP Pada PHP
    - Basic
      - Kita akan fokus terlebih dahulu pada basic atau pada konsep object oriented dasar, jadi ini adalah landasan untuk
        belajar kedepannya
      - Class & Object
        - Karena di dalam object oriented PHP ini tidak dapat terpisahkan
      - Property & Method
        - Data dan perilaku yang ada di dalam object oriented adalah property dan method
      - Constructor
        - Berfungsi untuk bagaimana caranya agar object yang dibuat sudah memiliki karakteristik default atau
          karakteristik bawaan itu dengan cara menggunakan constructor
      - Object Type
        - Dimana kita bisa membuat object sebagai tipe data sendiri
      - Inheritance
        - Dimana sebuah kelas atu object bisa saling mewarisi perilaku satu sama lain
      - Visibility / Access Modifier
        - Ini adalah salah satu yang membuat object oriented memiliki karakteristik enkapsulasi, dimana data-datanya itu
          tidak dapat sembarang diakses oleh bagian lain dalam program kita, nanti kita akan mengenal apa itu Public,
          private dan apa itu protected pada materi mengenai visibility ini
      - Setter & Getter
        - Terkait dengan enkapsulasi dimana kita tidak dapat sembarang mengubah sebuah property atau data, tapi kita harus
          menggunakan sesuatu yang disebut dengan setter & getter
      - Static & Method
        - Ini banyak digunakan di dalam framework jadi kita harus memahami apa itu static method dan bagaimana cara
          kerjanya
    - Advance (Lanjutan)
      - Abstract & Interface
        - Berfungsi untuk bagaimana melakukan abstraksi dari kelas atau object yang sudah dibuat
      - Interceptor
        - Terkait dengan setter & getter kita akan belajar mengenai magic method
      - Object Cloning
        - Berfungsi untuk bagaimana kita menduplikasi object sehingga dia memiliki perilaku yang berbeda, tidak membawa
          perilaku dari object sebelumnya
      - Callbacks & Closures
      - Namespaces & Autoloading
        - Karena begitu kita menggunakan object oriented itu kita harus paham bahwa kita harus melakukan loading semua
          kelas yang kita buat ke dalam program kita
      - dll

## Apa Yang Harus Disiapkan ?
### Code Editor
    - Visual Studio Code
    - Sublime Text 3
    - PHP Storm (Spesifik code editor PHP)
### Web Server
    - Appache
### Web Browser
    - Google Chrome
    - Mozilla Firefox
### Database Server
    - XAMPP
    - MAMP