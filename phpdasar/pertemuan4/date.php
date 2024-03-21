 <?php
    //  function date untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // time
    // unix timestamp / epoch time yaitu detik yang sudah berlalu sejak 1 januari 1970
    // echo time();  
    // echo date("l d M Y" , time()+60*60*24*100);

    // mktime
    // menentukan detik sendiri
    // mktime (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,1,17,2003));

    // strtotime
    echo date("l", strtotime("17 oct 2003 ")) ;
 ?>