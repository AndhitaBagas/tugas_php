<?php
//Volume Kubus
$sisi = 10;
$volumekubus = $sisi * $sisi * $sisi;

//volume Balok
$panjang = 6;
$lebar = 4;
$tinggibalok = 10;
$volumebalok = $panjang * $lebar * $tinggibalok;

//Volume Tabung
$jariJari = 10;
$phi = 3.14;
$tinggitabung = 10;
$volumetabung = $phi * $jariJari * $jariJari * $tinggitabung; ?>

<!DOCTYPE html>
<html>

<body>
    <h3>Kubus</h3>
    <?php echo "Kubus dengan sisi $sisi maka memiliki volume $volumekubus <br>"; ?>
    <h3>Balok</h3>
    <?php echo "Balok dengan panjang $panjang, lebar $lebar dan tinggi $tinggibalok maka memiliki volume $volumebalok "; ?>
    <h3>Tabung</h3>
    <?php echo "Volume dengan jari-jari $jariJari dan tinggi $tinggitabung maka memiliki luas $volumetabung ";
    ?>
</body>

</html>