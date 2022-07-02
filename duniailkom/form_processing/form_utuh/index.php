<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        div {
            width: 500px;
        }

        fieldset {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Pemrosesan Form</h1>

    <div>
    <form action="proses.php" method="POST">
       <fieldset>
           <legend>Biodata</legend>
           <table>
               <tr>
                   <td><label for="nama">Nama</label></td>
                   <td>:</td>
                   <td><input type="text" name="nama" id="nama"></td>
               </tr>
               <tr>
                   <td><label for="nim">NIM</label></td>
                   <td>:</td>
                   <td><input type="text" name="nim" id="nim"></td>
               </tr>
               <tr>
                   <td><label>Tanggal Lahir</label></td>
                   <td>:</td>
                   <td> 
                        <select name="tgl">
                            <?php for ($i = 1; $i <= 31; ++$i) : ?>
                                <option value="<?= $i;?>"><?= str_pad($i, 2, "0", STR_PAD_LEFT); ?></option>
                            <?php endfor; ?>
                        </select>

                        <select name="bln">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                        </select>

                        <select name="thn">
                            <?php for ($i = 1990; $i <= 2022; ++$i) : ?>
                                <option value="<?= $i;?>"><?= $i;?></option>
                            <?php endfor; ?>
                        </select>
                   </td>
               </tr>
               <tr>
                   <td><label for="alamat">Alamat</label></td>
                   <td>:</td>
                   <td><textarea name="alamat" id="alamat" cols="25"></textarea></td>
               </tr>
               <tr>
                   <td><label for="jk">Jenis Kelamin</label></td>
                   <td>:</td>
                   <td>
                       <label><input type="radio" name="kel" value="Laki-laki">Laki-laki</label>
                       <label><input type="radio" name="kel" value="Perempuan">Perempuan</label>
                   </td>
               </tr>
           </table>
       </fieldset>

       <fieldset>
           <legend>User Account</legend>
           <table>
               <tr>
                   <td><label for="username">Username</label></td>
                   <td>:</td>
                   <td><input type="text" name="username" id="username"></td>
               </tr>
               <tr>
                   <td><label for="email">Email</label></td>
                   <td>:</td>
                   <td><input type="text" name="email" id="email"></td>
               </tr>
               <tr>
                   <td><label for="pass">Password</label></td>
                   <td>:</td>
                   <td><input type="password" name="password" id="pass"></td>
               </tr>
               <tr>
                   <td><label for="repass">Ulangi Password</label></td>
                   <td>:</td>
                   <td><input type="password" name="repassword" id="repass"></td>
               </tr>
           </table>
       </fieldset>

       <fieldset>
           <legend>Resolusi Tahun Ini</legend>
           <table>
               <tr>
                   <td>
                       <input type="checkbox" name="target1" value="HTML" id="html">
                       <label for="html">Menguasai HTML</label>
                   </td>
               </tr>
               <tr>
                   <td>
                       <input type="checkbox" name="target2" value="CSS" id="css">
                       <label for="css">Paham CSS</label>
                   </td>
               </tr>
               <tr>
                   <td>
                       <input type="checkbox" name="target3" value="PHP" id="php">
                       <label for="php">Mastering PHP</label>
                   </td>
               </tr>
           </table>
       </fieldset>
       <br>
       <span><button type="submit">Kirim Data</button></span>
    </form>
    </div>
</body>
</html>