	<form action="" method = "post">
	
		<input type = "number"  name = "nilai" value ="<?php echo isset($_POST['nilai'])?$_POST['nilai']:"";?>" /> 
		<br>
		<input type = "submit" value ="cek">
	
	
	<?php
	
	echo"<br>";
	if (isset($_POST['nilai'])?$_POST['nilai']:""){
	$po = $_POST['nilai'];
	for ($a = 1; $a <=5; $a++) {
	for ($b = 1; $b <=$a;$b++){echo "$po";}
	echo "<br>";
	}}
	
	if(isset($_POST['nilai'])?$_POST['nilai']:""){
	$po = $_POST['nilai'];
	for (
	
	
	?>
	
	</form>
