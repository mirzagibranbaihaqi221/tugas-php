<html>
     <head>TUGAS ARRAY</head>
        
<body>

     <h2>Apa itu PHP ARRAY?</h2>
                           <p>Bisa dikatakan bahwa array merupakan tipe data yang spesial berbeda dengan yang lain<br> karena array merupakan tipe data yang terbentuk dari kumpulan tipe data lainnya</p>

     <h2>Apa itu Array index?</h2>
                             <p>Jadi yang di maksud array index adalah array yang di wakili oleh nomer indexsecara default jadi<br> semua elemen array nya di wakili nomer biasa nya dimulai dari angka 0</p>

      <h2>apa itu array asosiatif?</h2>
                                  <p>yang dimaksud dengan array asosiatif adalah array yang tidak menggunakan angka sebagai kunci disetiap nilai nya </p>
<br><br>
       <p> contoh array index & array asosiatif<p>



<?php


// array index
echo"<br>";
echo"<br>";
$motor = array("suzuki",6,true,"yamaha");
     echo "saya suka motor" . $motor[4] . "dan" .$motor[1];
     echo"<br>";
     var_dump($motor);
     echo"<br>";
     echo count($motor);
echo"<br>";
echo"<br>";
     $nama = array("gibs",2,false,"sena");
     echo "saya suka" . $nama[4] . "dan" . $nama[1];
     echo"<br>";
     var_dump($nama);
     echo"<br>";
     echo count($nama);
echo"<br>";
echo"<br>";
     $aku = array("DUARR",44,true,"bambang");
     echo "awas" . $aku[4] . "ada" . $nama[1];
     echo"<br>";
     var_dump($aku);
     echo"<br>";
     echo count ($aku);
echo"<br>";
echo"<br>";
echo"<br>";

//array asosiatif
     $age = array(1 => "twenty", 20=> "37", 100=>"43");
     $age ['peter'] = "35";
     $age ['20'] = "37";
     $age ['joe'] = "43";
echo "peter is" . $age[100] . "years old.";
echo"<br>";
echo"<br>";
     $aku = array(3 =>"tua",4=>"muda",5=>"111");
     $aku ['dadan'] = "22";
     $aku ['4'] = "muda";
     $aku ['dull']="111";
echo "dadan itu" .$aku[5]. "tahun.";
echo"<br>";
echo"<br>";
     $A = array(1=>"kaya",9=>"miskin",8=>"pelit");
     $A ['saya'] = "kaya";
     $A ['9'] ="miskin";
     $A ['kamu'] ="pelit";
echo "kamu itu" .$A[1]. "banget.";
echo"<br>";
echo"<br>";
    $s = array(2 =>"tiga puluh", 21=>"35", 1=>"33");
    $s ['amad']="20";
    $s ['21']="35";
    $s ['dani']="33";
echo "umur amad" .$s[1]. "tahun.";

?>

</body>
</html>
