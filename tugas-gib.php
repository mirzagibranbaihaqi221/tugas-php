<?php
	function beta1($nilai,$baris){
		for ($a=0; $a < $baris ; $a++){
			for ($b=0; $b<=$a; $b++){
				$c = $nilai + $b;
				if ($c >=50 and $c<80){
				$uwu = "C";
				}
				elseif ($c >=0 and $c <50){
				$uwu = "D";
				}
				elseif($c >=90 and $c <=100){
				$uwu = "A";
				}
				elseif($c >=80 and $c <90){
				$uwu = "B";
				}
				echo "$c($uwu)";
			}
		echo "<br>";
	}
}
	beta1(50,3);echo "<br>";
	beta1(60,5);echo "<br>";
	beta1(80,3);echo "<br>";
?>
