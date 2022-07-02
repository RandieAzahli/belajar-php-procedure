<?php 

// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l,d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 january 1970
// echo time();

// echo date("l",time()-3600*24*365*18);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan , tanggal, tahun
// echo date("l",mktime(0,0,0,07,13,2004));


// strtotime
echo date("l",strtotime("13 july 2004"));

 ?>