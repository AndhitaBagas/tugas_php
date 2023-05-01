<?php
for ($i = 10; $i > 0; $i--) {
    for ($a = 0; $a < $i; $a++) {
        echo "*";
    }
    echo "<br>";
}
//Pada perulangan pertama, variabel $i dideklarasikan dengan nilai awal 10. Kemudian, kondisi pada perulangan for adalah $i > 0, yang artinya perulangan akan terus berjalan selama nilai variabel $i lebih besar dari 0. Setiap kali perulangan dijalankan, nilai variabel $i akan dikurangi 1.

//Pada setiap perulangan pertama, sebuah perulangan kedua juga dijalankan, dimana variabel $a dideklarasikan dengan nilai awal 0. Kondisi pada perulangan kedua adalah $a < $i, yang artinya perulangan akan terus berjalan selama nilai variabel $a kurang dari nilai variabel $i. Setiap kali perulangan kedua dijalankan, sebuah bintang (*) dicetak menggunakan perintah echo.Setelah perulangan kedua selesai, baris teks baru (<br>) dicetak menggunakan perintah echo. Setelah itu, perulangan pertama akan berlanjut ke iterasi berikutnya, dimana variabel $i akan dikurangi 1 lagi, dan perulangan kedua akan mencetak lebih sedikit bintang.