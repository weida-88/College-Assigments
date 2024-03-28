<?php	
// Deklarasi multidimentional array	
$dataNilai = array(
	"Wayan" => array("Tugas" => 90, "UTS" => 60, "UAS" => 100),
	"Made" => array("Tugas" => 70, "UTS" => 50, "UAS" => 50),
	"Nyoman" => array("Tugas" => 60, "UTS" => 80, "UAS" => 70)
);
?>		
		
<!-- Codingan HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Multi Associative Array</title>
    </head>
    <body>
        <center><h1>Tugas Multi Associative Array<br>Menampilkan Data Nilai Mahasiswa</h1></center>

        <br><br>

        <table>
            <tr>
                <th>Nama Siswa</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
            </tr>
            <tr>
                <td><?php echo "Wayan" ?></td>
                <td><?php echo $dataNilai["Wayan"]["Tugas"] ?></td>
                <td><?php echo $dataNilai["Wayan"]["UTS"] ?></td>
                <td><?php echo $dataNilai["Wayan"]["UAS"] ?></td>
            </tr>
            <tr>
                <td><?php echo "Made" ?></td>
                <td><?php echo $dataNilai["Made"]["Tugas"] ?></td>
                <td><?php echo $dataNilai["Made"]["UTS"] ?></td>
                <td><?php echo $dataNilai["Made"]["UAS"] ?></td>
            </tr>
            <tr>
                <td><?php echo "Nyoman" ?></td>
                <td><?php echo $dataNilai["Nyoman"]["Tugas"] ?></td>
                <td><?php echo $dataNilai["Nyoman"]["UTS"] ?></td>
                <td><?php echo $dataNilai["Nyoman"]["UAS"] ?></td>
            </tr>
        </table>
    </body>
</html>

