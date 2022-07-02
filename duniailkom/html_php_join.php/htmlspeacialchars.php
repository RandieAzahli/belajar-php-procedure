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
    
        $kalimat1 = htmlspecialchars("tag <table> digunakan untuk membuat tabel di HTML");
        echo $kalimat1;

        echo "</br>";

        $kalimat2 = htmlspecialchars("tag <a href=\"index.php\">, digunakan untuk membuat link");
        echo $kalimat2;
    ?>
</body>
</html>