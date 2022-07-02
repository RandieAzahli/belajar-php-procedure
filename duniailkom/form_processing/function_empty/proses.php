<?php 

if (!isset($_POST["submit"])) {
  header("location: index.php");
  die();
}

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
    <h1>Halaman Proses</h1>
    <?php 
        $nama = trim($_POST["nama"]);
        $email = trim($_POST["email"]);

        if (empty($nama)) {
          echo "Nama wajib diisi !";
          echo "</br>";
        }
        else {
          echo "Nama : " . $nama;
          echo "</br>";
        }

        if (empty($email)) {
          echo "Email wajib diisi !";
          echo "</br>";
        }
        else {
          echo "Email : " . $email;
          echo "</br>";
        }

        if (isset($_POST["belajar"])) {
          echo "Belajar : " . $_POST["belajar"];
        }
    ?>
</body>
</html>