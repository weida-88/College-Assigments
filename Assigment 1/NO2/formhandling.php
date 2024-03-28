<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas No 2</title>
</head>

<body>
    <h3>Asesmen PHP Form Handling GET & POST</h3>
    <hr><br>

    <h3>Metode POST</h3>
    <form action="" method="POST">
        <p>Jumlah upah per jam : <input type="text" name="upah" value=""></p>
        <p>Jumlah jam kerja : <input type="text" name="jamkerja" value=""></p>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h3>Output Metode POST</h3>
    <?php
        if (isset( $_POST["submit"] )) {
            echo "Jumlah upah per jam = Rp.", $_POST["upah"], "<br>";
            echo "Jumlah jam kerja = ", $_POST["jamkerja"], "<br>";
            
            if ($_POST["jamkerja"] > 48){
                $upah = $_POST["upah"] * $_POST["jamkerja"];
                $waktuLembur = $_POST["jamkerja"] - 48;
                $uangLembur = $waktuLembur * 0.15 * $_POST["upah"];
                $totalUpah = $upah + $uangLembur;
                echo "Jumlah upah total + bonus upah lembur = Rp.",  $totalUpah, "<br>";
            } else {
                $gaji = $_POST["upah"] * $_POST["jamkerja"];
                echo "Jumlah upah total = Rp.", $gaji, "<br>";
            }
        }
    ?>
    <br><br>
    <hr>

    <h3>Metode GET</h3>
    <form action="" method="GET">
        <p>Jumlah upah per jam : <input type="text" name="upah" value=""></p>
        <p>Jumlah jam kerja : <input type="text" name="jamkerja" value=""></p>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h3>Ouput Metode GET</h3>
    <?php
        if (isset( $_GET["submit"] )) {
            echo "Jumlah upah per jam = Rp.", $_GET["upah"], "<br>";
            echo "Jumlah jam kerja = ", $_GET["jamkerja"], "<br>";
            
            if ($_GET["jamkerja"] > 48){
                $upah = $_GET["upah"] * $_GET["jamkerja"];
                $waktuLembur = $_GET["jamkerja"] - 48;
                $uangLembur = $waktuLembur * 0.15 * $_GET["upah"];
                $totalUpah = $upah + $uangLembur;
                echo "Jumlah upah total + bonus lembur = Rp.",  $totalUpah, "<br>";
            } else {
                $gaji = $_GET["upah"] * $_GET["jamkerja"];
                echo "Jumlah upah total = Rp.", $gaji, "<br>";
            }
        }
    ?>
    <br><br>
    <hr>
</body>

</html>