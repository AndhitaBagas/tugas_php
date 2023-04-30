<!DOCTYPE html>
<html>

<head>
    <title>Form Nilai</title>
</head>

<body>
    <h2>Form Nilai</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama"><br><br>
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $nilai = $_POST["nilai"];

        switch ($nilai) {
            case $nilai >= 90 && $nilai <= 100:
                $grade = "A";
                break;
            case $nilai >= 80 && $nilai < 90:
                $grade = "B";
                break;
            case $nilai >= 70 && $nilai < 80:
                $grade = "C";
                break;
            case $nilai >= 0 && $nilai < 70:
                $grade = "D";
                break;
        }

        echo "<p>Halo, " . $nama . "!</p>";
        echo "<p>Nilai Anda adalah " . $grade . ".</p>";
    }
    ?>
</body>

</html>