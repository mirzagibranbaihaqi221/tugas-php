<?php
	$alpabet = array_merge(range(chr(65),chr(90)));
		for($ab1 = 6; $ab1 >=0; $ab1--){
			for ($ab2 = 0; $ab2 <= 6;$ab2++){
			 if ($ab2 < 6){
			 if ($ab2 <= $ab1) {
			 		echo $alpabet[$ab2];
			 		} else {
			 		  	echo	"..";
			 		}	  	
			} else {
					for ($ab3 = 6; $ab3 >= 0; $ab3--){
						if ($ab3 <= $ab1) {
								echo $alpabet[$ab3];
							} else {
								echo "..";
						}
					}
				}
			}
			echo "<br>";
			}

?>
