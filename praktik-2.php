<?php
$nama = array();
$kelas = array();

for ($i = 0; $i <= 10; $i++) {
    array_push($nama, "Nama ke $i");
}

for ($i = 10; $i > 0; $i--) {
    array_push($kelas, "Kelas $i");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="3">
        <tr style="border: 100px; 10px-solid black">
            <td style="background-color: #00BFFF;">NO</td>
            <td style="background-color: #00BFFF;">NAMA</td>
            <td style="background-color: #00BFFF;">KELAS</td>
        </tr>
        <tr border="1">
            <td border="1">
                <?php
                for ($i = 1; $i < 10; $i++) {
                    echo $i;
                    echo "<br>";
                }
                ?>
            </td>
            <td border="1">
                <?php
                for ($i = 1; $i < 10; $i++) {
                    echo $nama[$i];
                    echo "<br>";
                }
                ?>
            </td>
            <td border="1">
                <?php
                for ($i = 1; $i < 10; $i++) {
                    echo $kelas[$i];
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>