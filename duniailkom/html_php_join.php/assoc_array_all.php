<?php 

$siswa = array(

    "siswa1" => ["Joko", "Medan", "12 Agustus 1998"],
    "siswa2" => ["Rini", "Jakarta", "22 Juli 1999"],
    "siswa3" => ["Joy", "Samarinda", "4 Maret 1998"],
    "siswa4" => ["Santi", "Palembang", "12 Desember 1999"],
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php 

        echo "{$siswa["siswa1"][0]} - {$siswa["siswa1"][1]} - {$siswa["siswa1"][2]}";
        echo "</br>";
        echo "{$siswa["siswa2"][0]} - {$siswa["siswa2"][1]} - {$siswa["siswa2"][2]}";
        echo "</br>";
        echo "{$siswa["siswa3"][0]} - {$siswa["siswa3"][1]} - {$siswa["siswa3"][2]}";
        echo "</br>";
        echo "{$siswa["siswa4"][0]} - {$siswa["siswa4"][1]} - {$siswa["siswa4"][2]}";
    ?>
</body>
</html>