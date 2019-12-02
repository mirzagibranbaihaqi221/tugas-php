<html>
     <head>
     </head>
        <body>
           <h2>APA ITU ARRAY MULTIDIMENSIONAL </h2>
           <p>yang dimaksud dengan array multidimensional adalah array 
			<br>yang didalam nya terdapat array lagi</p>
				<br><br>
		<?php
            //array 2dimensional

          $senjata_pubg = array
                   (
                    array("AWP",10,5),
					array("AK-47",30,19),
					array("M16A4",23,15),
					array("M4A1",15,8),
                   );

			

           echo $senjata_pubg[0][0].": stok nya: " .$senjata_pubg[0][1].",terjual: ".$senjata_pubg[0][2]."<br>";
		   echo $senjata_pubg[1][0].": stok nya: " .$senjata_pubg[1][1].",terjual: ".$senjata_pubg[1][2]."<br>";
		   echo $senjata_pubg[2][0].": stok nya: " .$senjata_pubg[2][1].",terjual: ".$senjata_pubg[2][2]."<br>";	
		   echo $senjata_pubg[3][0].": stok nya: " .$senjata_pubg[3][1].",terjual: ".$senjata_pubg[3][2]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

         $perlengkapan =array
                        (
                        array("tas level 3",22,11),
                        array("kevlar level 3",34,22),
                        );       

         echo $perlengkapan[0][0].": stok nya: " .$perlengkapan[0][1].",terjual: ".$perlengkapan[0][2]."<br>";
         echo $perlengkapan[1][0].": stok nya: " .$perlengkapan[1][1].",terjual: ".$perlengkapan[1][2]."<br>";

echo "<br>";
echo "<br>";
echo "<br>";
      echo "<br>";
echo "<br>";
   //array 3dmnsional
			$harta = array
                     (
                     array(array("hamzah",500,150),
					       array("hamiz",350,120),
     				       array("raina",550,55),
                           array("haikal",450,150),
                           array("naura",990,390),
                           array("namra",1200,500))
                     );

			echo $harta[0][0][0].": pendapatan:" .$harta[0][0][1].",pengeluaran:".$harta[0][0][2]."<br>";
            echo $harta[0][1][0].": pendapatan:" .$harta[0][1][1].",pengeluaran:".$harta[0][1][2]."<br>";  
            echo $harta[0][2][0].": pendapatan:" .$harta[0][2][1].",pengeluaran:".$harta[0][2][2]."<br>";
            echo $harta[0][3][0].": pendapatan:" .$harta[0][3][1].",pengeluaran:".$harta[0][3][2]."<br>";
            echo $harta[0][4][0].": pendapatan:" .$harta[0][4][1].",pengeluaran:".$harta[0][4][2]."<br>";
            echo $harta[0][5][0].": pendapatan:" .$harta[0][5][1].",pengeluaran:".$harta[0][5][2]."<br>";

         echo"<br>";
         echo"<br>";
    
         $untung = array
                  (
                  array(array("PT.DUARR","1 juta","500 ribu"),
                       array("PT.kuda","15 juta","3.5 juta"),
                       array("CV.tutup botol","2 juta","1 juta")

)
                 );

          echo $untung[0][0][0].": untung :".$untung[0][0][1]." ,hutang: ".$untung[0][0][2]."<br>";
          echo $untung[0][1][0].": untung :".$untung[0][1][1]." ,hutang: ".$untung[0][1][2]."<br>";
          echo $untung[0][2][0].": untung :".$untung[0][2][1]." ,hutang: ".$untung[0][2][2]."<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";


			$MAKAN = array
                     (
                     array(array("rizki","ayam","sop"),
					       array("Pak Bambang","soto","sate"),
     				       array("Naura","es krim","roti"),
                           )
                     );

			echo $MAKAN[0][0][0]." suka makan " .$MAKAN[0][0][1]." dan juga ".$MAKAN[0][0][2]."<br>";
            echo $MAKAN[0][1][0]." suka makan " .$MAKAN[0][1][1]." dan juga ".$MAKAN[0][1][2]."<br>";  
            echo $MAKAN[0][2][0]." suka makan " .$MAKAN[0][2][1]." dan juga ".$MAKAN[0][2][2]."<br>";



//array ascending



	echo"<br>";
	echo"<br>";    					
    		$nama_presiden = array("Soekarno","JF Kenndey","Fidel Castro");
    		sort($nama_presiden);
			var_dump($nama_presiden);
    echo "<br>";
    echo "<br>";
			$alat_tulis = array("penggaris","buku","pensil");
            sort($alat_tulis);
			var_dump($alat_tulis);
    echo "<br>";
    echo "<br>";
            $berat_badan = array(55 , 77 ,69);
			sort($berat_badan);
            var_dump($berat_badan);
	echo"<br>";
    echo"<br>";
	echo"<br>";
	echo"<br>";
			
//descending


		$negara_arab = array("saudi arabia","dubai","qatar","oman");
		rsort($negara_arab);
		var_dump($negara_arab);
	echo"<br>";
	echo"<br>";
    echo"<br>";
		$tambang = array("besi","emas","perak","uranium");
		rsort($tambang);
		var_dump($tambang);
	echo"<br>";
	echo"<br>";
    echo"<br>";
	    
//ascending asosiatip

    $power = array("saitama"=>"1000","goku"=>"150","gibran"=>"200");
   asort($power);
   var_dump($power);
echo "<br>";
echo "<br>";
echo "<br>";
	$anak = array("gibran"=>"5","haikal"=>"3","paundra"=>"2");
	asort($anak);
	var_dump($anak);
echo "<br>";
echo "<br>";
echo "<br>";
	
//descending asosiatip

	$uang = array("aku"=>"12","kamu"=>"23","kita"=>"13","dia"=>"98");
	arsort($uang);
	var_dump($uang);
echo "<br>";
echo "<br>";
echo "<br>";
	$roda = array("panser"=>"8","jeep"=>"4","truck"=>"12","tank"=>"20");
	arsort($roda);
	var_dump($roda);
echo "<br>";
echo "<br>";
echo "<br>";
	
				//asc key asosiatip
	$pensil = array("joyko"=>"5000","fabercasteel"=>"4800","greebeel"=>"7800");
	ksort($pensil);
	var_dump($pensil);
echo "<br>";
echo "<br>";
echo "<br>";
	$motor = array("kawasaki"=>"35000","harley"=>"130000","yamaha"=>"3400","honda"=>"9800");
	ksort($motor);
	var_dump($motor);
echo "<br>";
echo "<br>";
echo "<br>";
	$botol = array("tuperware"=>"1300","tulipware"=>"2340","miniso"=>"5000","supreme"=>"89000");
	ksort($botol);
	var_dump($botol);
echo "<br>";
echo "<br>";
echo "<br>";
	//desc key asosiatip
	$peluru = array("AK-47"=>"30","M60"=>"100","AWP"=>"10");
	krsort($peluru);
	var_dump($peluru);
echo "<br>";
echo "<br>";
echo "<br>";
	$sembako = array("micin"=>"190","masako"=>"9000");
	krsort($sembako);
	var_dump($sembako);
echo "<br>";
echo "<br>";
echo "<br>";
	$buku = array("komik naruto"=>"8700","komik onepiece"=>"17900","komik conan"=>"1200");
	krsort($buku);
	var_dump($buku);
echo "<br>";
echo "<br>";
echo "<br>";


	
?>          


     </body>

</html>
