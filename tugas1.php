<html>
<head>
<title></title>
<body>

      <h2>tugas </h2>
       
     <?php
// contoh variable
       $nama="guteng";
       $umur=17;
       
       echo $nama;
       echo "<br>";
       echo $umur;
       echo "<br>";
       echo "<br>";

    
//contoh strlen

      echo strlen("minna san!!!");
      echo "<br>";
      echo strlen("shineeeee!!!!");
      echo "<br>";
      echo strlen("nani??");
      echo "<br>";
      echo strlen("DUAR!!!!!");
      echo "<br>";
      echo strlen("!!uwuw!!");
      echo "<br>";
      echo "<br>";
      
//contoh str_word_count
      echo str_word_count("mirza gibran");
      echo "<br>";
      echo str_word_count("saya anak sholeh");
      echo "<br>";
      echo str_word_count("saya rajin ke masjid");
      echo "<br>";
      echo str_word_count("henshin!!");
      echo "<br>";
      echo str_word_count("onee chan ohayou");
      echo "<br>";
      echo "<br>";

//contoh strrev

      echo strrev("aku wibu");
      echo "<br>";
      echo strrev("novus ordo seclorum");
      echo "<br>";
      echo strrev("wibu kerad");
      echo "<br>";
      echo strrev("annuit cceptis");
      echo "<br>";
      echo strrev("mereka tahu kita tahu");
     echo "<br>";
      echo "<br>";
      echo "<br>";
      
    
//contoh strpos

      echo strpos("namaku gibran","gibran");
      echo "<br>";
      echo strpos("coba tebak","tebak");
      echo "<br>";
      echo strpos("kimino namaewa","namaewa");
      echo "<br>";
      echo strpos("the earth is flat","earth");
      echo "<br>";
      echo strpos("people power","people");
      echo "<br>";
      echo "<br>";
      echo "<br>";

//contoh str_replace

      echo str_replace("pucung","reina","hello pucung");
      echo "<br>";
      echo str_replace("kamu","naura","aku sayang kamu");
      echo "<br>";
      echo str_replace("dia","aku","pilih dia");
      echo "<br>";
      echo str_replace("rem","emilia","suka sama rem");
      echo "<br>";
      echo str_replace("gibran","mirza","mati kau gibran");
      echo "<br>";
      echo "<br>";
      echo "<br>";

//contoh operasi aritmatika  
      $x=10;
      $y=6;

       echo $x + $y;
       echo "<br>";
       echo $x * $y;
       echo "<br>";
       echo "<br>";

      
//contoh operasi assignment
      $aku=20;
      $aku +=30;
      
      echo $aku;
      echo "<br>";
      

   
     $a=10;
     $a -=20;
     
    echo $a;
    echo"<br>";
    echo"<br>";

 //contoh comparison
 
    $A=200;
    $B="200";  
    var_dump($A == $B);   
    echo "<br>";
    var_dump($A === $B);
    echo "<br>";
    echo "<br>";

//ontoh increment/decrement
          $g=13;
          echo ++$g;
          echo"<br>";
          echo --$g;


    echo"<br>";
    echo"<br>";
//contoh logical operator
          $p=90;
          $l=80;

       if($p == 90 and $l == 80) {echo "holla world!";} 
       echo "<br>";
       if($p ==90 && $l==80) {echo "holla world!";}
       echo "<br>";
       echo "<br>";
       echo "<br>";
    

//contoh string operator

   $txt1="namaku";
   $txt2="gibran"; 
      
   echo $txt1.$txt2;
   echo "<br>";
   $txt3="aku";
   $txt4="kamu";      
   $txt3.=$txt4;
   echo $txt3;
   
echo "<br>";
echo "<br>";


//contoh array operator

$k=array("a" =>"red","b" =>"green");
$u=array("c" =>"khaki","d" =>"blue");
print_r($k+$u);

echo "<br>";
var_dump($k==$u);
?>
 





</body>
</head>
</html>
