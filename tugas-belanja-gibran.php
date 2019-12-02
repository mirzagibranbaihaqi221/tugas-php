<html>
	<head>
		<style>
			body{text-alighn :center; background-color:lightblue;}

		</style>


	<head>
		<center>
				<body>
						<h2>Pembayaran Belanja</h2>
						
						<form action="tugas-belanja-gibran.php" method="POST">
						<label>
							MASUKAN TOTAL BELANJA:<input type="number" name="belanja" value="<?php echo isset($_POST['belanja'])?$_POST['belanja']:"";?>" />
						</label>
						<br>
						<input type = "submit" value = "masukan"/>
						 
						 
						 <br><br>
						 
						 <?php
						 		
						 	if (isset($_POST['belanja'])?$_POST['belanja']:""){
						 	
						 	
						 	$belanja= 40000 - $_POST['belanja'];
						  $belanja1=$_POST['belanja'];
						 	
						 	if ( $belanja1 > 40000)
						 	{
						 	echo "seperti nya anda sudah belanja sebanyak".$belanja1."anda kelebihan";
						 	}
						  else if ($belanja1 == 40000)
						  {
						  echo "YOSHHH👌️ ikuzoo ayo pulang saat nya masak";
						  }
						 	else if ($belanja1 <40000 && $belanja1 >=0  )
						 	{
						 	echo "belanjaan anda masih kurang Rp: ".$belanja;
						 	}
						 	else if ($belanja1 < 0)
						 	{
						 	echo "masukan angka";
						 	}
						  
						 	}
						 	
						 ?>
						 
						 <br><br>
						  <h2> DISCOUNTTT!!!! </h2>
						  <form action= "tugas-belanja-gibran.php" method="post">
						  <label>
						  Masukan Pembayaran :<input type="number" name="disc" value="<?php echo isset($_POST['disc'])?$_POST['disc']:"";?>" />
						  </label>
						  <br>
						  <input type ="submit" value ="cek"/>
						  
						  <?php
						  		if (isset($_POST['disc'])?$_POST['disc']:""){
						  		$disc = $_POST['disc'] * 17.5/100;
						  		
						  if	($disc >0)
						  {
						  echo "selamat anda dapat discount sebesar  ".$disc;
						  }	
						  
						  
						  
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		
						  		}
						  
						  
						  
						  
						  
						  ?>
						  
				</body>
				
</html>
