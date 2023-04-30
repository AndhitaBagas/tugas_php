<!DOCTYPE html>
<html>

<head>
    <title>Tugas BMI</title>
</head>

<body>
    <h2>Hitung BMI</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama"><br><br>
        <label for="tinggi">Tinggi (cm):</label>
        <input type="text" name="tinggi"><br><br>
        <label for="berat">Berat (kg):</label>
        <input type="text" name="berat"><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $tinggi = $_POST["tinggi"] / 100; //ubah ke meter
        $berat = $_POST["berat"];

        $bmi = $berat / ($tinggi * $tinggi);

        echo "<p>Halo, " . $nama . "!</p>";
        echo "<p>BMI Anda adalah " . $bmi . ".</p>";

        if ($bmi < 18.5) {
            echo "<p>Anda Termasuk Kurus.</p>";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            echo "<p>Anda Termasuk Sedang.</p>";
        } elseif ($bmi >= 25 && $bmi < 40) {
            echo "<p>Anda Termasuk Gemuk.</p>";
        }
    }
    ?>
</body>

</html>