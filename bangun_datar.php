<?php
$sisi = 10;
$luaspersegi = $sisi * $sisi;

$panjang = 6;
$lebar = 4;
$luaspersegipanjang = $panjang * $lebar;

$alassegitiga = 8;
$tinggisegitiga = 6;
$luassegitiga = 0.5 * $alassegitiga * $tinggisegitiga;

$jariJari = 10;
$phi = 3.14;
$luaslingkaran = $phi * $jariJari * $jariJari;


$alasjajargenjang = 10;
$tinggijajargenjang = 8;
$luasjajargenjang = $alasjajargenjang * $tinggijajargenjang;


?>
<!DOCTYPE html>
<html>

<body>
    <h3>Persegi</h3>
    <?php echo "Persegi dengan sisi $sisi memiliki luas $luaspersegi <br>"; ?>

    <h3>Persegi Panjang</h3>
    <?php echo "Persegi panjang dengan panjang $panjang dan lebar $lebar memiliki luas $luaspersegipanjang "; ?>

    <h3>Segitiga</h3>
    <?php echo "Segitiga dengan alas $alassegitiga, tinggi $tinggisegitiga,  memiliki luas $luassegitiga ";
    ?>

    <h3>Lingkaran</h3>
    <?php echo "Lingkaran dengan jari-jari $jariJari memiliki luas $luaslingkaran";
    ?>

    <h3>Jajar genjang</h3>
    <?php echo "Jajar genjang dengan alas $alasjajargenjang, tinggi $tinggijajargenjang , memiliki luas $luasjajargenjang";
    ?>
</body>

</html>