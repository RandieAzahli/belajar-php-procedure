<?php 

if (!isset($_POST["submit"])) {
  header("location: index.php");
  die();
}

$nama = trim($_POST["nama"]);
$email = trim($_POST["email"]);

if (empty($nama)) {
  $pesan = urlencode("Nama harus diisi !");
  header("location: index.php?pesan=$pesan");
  die();
}

if (empty($email)) {
  $pesan = urlencode("Email harus diisi !");
  header("location: index.php?pesan=$pesan");
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
       echo "Nama : " . $nama;
       echo "</br>";
       echo "Email : " . $email;

       if (isset($_POST["belajar"])) {
         echo "Belajar : " . $_POST["belajar"];
       }
    ?>
</body>
</html>