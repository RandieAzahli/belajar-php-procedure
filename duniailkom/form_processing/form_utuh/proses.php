<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halaman Proses</h1>
    <?php 
        echo "Nama : " . $_POST["nama"];
        echo "</br>";
        echo "NIM : " . $_POST["nim"];
        echo "</br>";
        echo "Tanggal Lahir : " . $_POST["tgl"] . " - " . $_POST["bln"] . " - " . $_POST["thn"];
        echo "</br>";
        echo "Alamat : " . $_POST["alamat"];
        echo "</br>";
        echo "Jenis Kelamin : " . $_POST["kel"];
        echo "</br>";
        echo "Username : " . $_POST["username"];
        echo "</br>";
        echo "Alamat Email : " . $_POST["email"];
        echo "</br>";
        echo "Password : " . $_POST["password"];
        echo "</br>";
        echo "Konfirmasi Password : " . $_POST["repassword"];
        echo "</br>";
        echo "Target1 : " . $_POST["target1"];
        echo "</br>";
        echo "Target2 : " . $_POST["target2"];
        echo "</br>";
        echo "Target3 : " . $_POST["target3"];
        
        echo "</br>";

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    ?>
</body>
</html>