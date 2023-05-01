<?php
for ($i = 0; $i < 10; $i++) {
    for ($a = 0; $a < $i; $a++) {
        echo $a;
    }
    echo "<br>";
}
//Pada perulangan pertama, variabel $i dideklarasikan dengan nilai awal 0. Kemudian, kondisi pada perulangan for adalah $i < 10, yang artinya perulangan akan terus berjalan selama nilai variabel $i kurang dari 10. Setiap kali perulangan dijalankan, nilai variabel $i akan bertambah 1.
//Pada setiap iterasi perulangan pertama, sebuah perulangan kedua juga dijalankan, dimana variabel $a dideklarasikan dengan nilai awal 0. Kondisi pada perulangan kedua adalah $a < $i, yang artinya perulangan akan terus berjalan selama nilai variabel $a kurang dari nilai variabel $i. 
//Setiap kali perulangan kedua dijalankan, nilai variabel $a akan dicetak menggunakan perintah echo.Setelah perulangan kedua selesai, baris teks baru (<br>) dicetak menggunakan perintah echo. Setelah itu, perulangan pertama akan berlanjut ke iterasi berikutnya, dimana variabel $i akan bertambah 1 lagi, dan perulangan kedua akan mencetak lebih banyak angka.
//Dalam kode tersebut, pola angka yang dihasilkan akan membentuk segitiga dengan setiap baris memiliki urutan angka dari 0 hingga $i-1. Sebagai contoh, pada baris pertama hanya mencetak angka 0 dan pada baris terakhir mencetak angka 0 sampai 8.