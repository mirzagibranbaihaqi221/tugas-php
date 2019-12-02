<html>
<head>
</head>
<body>
<?php
$cars = array
( 
array(array("kijang",22,18,16),
array("volvo",22,18),
array("bmw",15,13,17),
array("saab",5,2,"wuling","jeep"),
array("land rover",17,15,"daihatsu","corola")),array(array("kijang",22,18,16),
array("volvo",22,18),
array("bmw",15,13,17),
array("saab",5,2,"wuling","jeep"),
array("land rover",17,15,"daihatsu","corola"))
);
var_dump($cars);
echo"<br>";
echo $cars[0][0].": In stock: " .$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: " .$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: " .$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[4][0].": In stock: " .$cars[3][1].", sold: ".$cars[3][2].".<br>";

$mobil = array(3, 4, 5);
sort($mobil);
var_dump($mobil);
echo"<br>";
$age = array("Peter"=>50, "Ben"=>37, "Joe"=>15);
krsort($age);
var_dump($age);
?>
</body>
</html>
