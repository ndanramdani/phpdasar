<?php
//date
//untuk menampilkan tanggal dan format tertentu
//echo date('l, d-m-y');

//time
// UNIX Timestamp / EPOCH time
//detik yang sudah berlalu sejak 1 januari 1970
//echo time();
// echo date("l-m-y", time()+60*60*24*100);

//mktime
//membuat sendiri  detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal ,tahun
//echo date("l", mktime(0,0,0,10,21,2005));

// //strtotime
// echo date ("l", strtotime("21 october 2005"));
?>