<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik JSON</title>
</head>

<body>
    <table border="4">
        <tr>
            <td width="50px"><b>No.</b></td>
            <td width="100px"><b>Nama</b></td>
            <td width="200px"><b>Tanggal lahir</b></td>
            <td width="200px"><b>Umur</b></td>
            <td width="200px"><b>Alamat</b></td>
            <td width="200px"><b>Kelas</b></td>
            <td width="50px"><b>Nilai</b></td>
            <td width="50px"><b>Hasil</b></td>
        </tr>
        <?php
        $json_string = file_get_contents('data.json');
        $json = json_decode($json_string, true);
        ?>
        <?php foreach ($json as $data) {
            $tanggal_lahir = new DateTime($data['tanggal_lahir']);

            $today = new DateTime();
            $umur = $tanggal_lahir->diff($today);
            $umur = $umur->format('%y Tahun');

        ?>
            <tr>
                <td><?php echo $data["no"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["tanggal_lahir"]; ?></td>
                <td><?php echo $umur; ?></td>
                <td><?php echo $data["alamat"]; ?></td>
                <td><?php echo $data["kelas"]; ?></td>
                <td><?php echo $data["nilai"]; ?></td>
                <td><?php switch ($data["nilai"]) {
                        case $data["nilai"] >= 90 && $data["nilai"] <= 100:
                            echo "A";
                            break;
                        case $data["nilai"] >= 80 && $data["nilai"] < 90:
                            echo "B";
                            break;
                        case $data["nilai"] >= 70 && $data["nilai"] < 80:
                            echo "C";
                            break;
                        case $data["nilai"] >= 0 && $data["nilai"] < 70:
                            echo "D";
                            break;
                    }


                    ?></td>

            </tr>
        <?php } ?>

    </table>
</body>

</html>