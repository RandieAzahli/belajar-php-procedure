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
    <table border="1" cellpadding="5" cellspacing="1">
       <?php foreach ($siswa as $val) {

            echo "<tr>";
            echo "<td>{$val[0]}</td>";
            echo "<td>{$val[1]}</td>";     
            echo "<td>{$val[2]}</td>";   
            echo "</tr>";
       } 
       ?>
    </table>
</body>
</html>