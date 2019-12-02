<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Fredoka+One|Nunito|Saira+Stencil+One|Montserrat|Josefin+Sans|Righteous&display=swap" rel="stylesheet">
		<title>Task From Brother Thoreq</title>
		<style>
			h1 {
				font-family: 'Saira Stencil One', cursive;
				text-align: center;
				font-size: 60px;
				margin:0;
				}
			.center {margin: auto;}
			.div {
				text-align: center;
				font-family: 'Nunito', sans-serif;
				}
			#hr1 {
				border: none;
				padding-bottom: 20px;
				margin: 0;
				margin-left: 400px;
				margin-right:400px;
				}
			#hr2 {
				margin: 0; 
				margin-left: 500px;
				margin-right:500px;
				}
			.input1 {
				text-align: center;
				width: 150px; 
				color:blue;
				border: none;
				border-bottom: 3px solid #cfcfcf;
				background-color: #f2f2f2;
				border-radius: 5px;
				height: 30px;
				font-size: 15px;
				}
			.input2 {
				background: none;
				text-align: center;
				border: 2px solid gray;
				padding: 5px 20px;
				outline: none;
				color: gray;
				border-radius: 24px;
				cursor:pointer;
				}
			.input2:hover{
				border: 2px solid black;
				background: yellow;
				color: white;
				}
			.h2a {
				margin: 0;
				margin-left: 400px;
				margin-right: 400px;
				background-color: black;
				text-align: center;
				color: white;
				font-family: 'Righteous', cursive;
				font-size: 50px;
				outline: 5px solid lightyellow;
				}
			.h2b {
				margin: 0;
				margin-left: 400px;
				margin-right: 400px;
				background-color: yellow;
				text-align: center;
				color: black;
				font-family: "Montserrat", sans-serif;
				font-size: 20px;
				padding-top: 10px;
				}
			.nb {
				margin: 0;
				font-size: 12px; 
				color: red;
				}
			.pad {
				padding-bottom: 45px;
				}
			h3 {
				text-align: center; 
				color: darkred;
				}
			h6 {
				text-align: center;
				color: gray;
				}
		</style>
	</head>
	<body>
		<h1>Count Application</h1>
		<h2 class="h2a">~Aamiin Mart~</h2>
		<h2 class="h2b">Shopping Payment Count</h2>
		<form action="iyasnitip.php" method="POST">
		<table class="center">
			<tr><td>
				<label>IDR
					<input class="input1" placeholder="your total price" type="number" name="count" value="<?php echo isset($_POST['count'])?$_POST['count']:""; ?>" />,00
				</label>
				<input class="input2" type="submit" value="COUNT" /><br>
			</td></tr>
		<hr id="hr1">
		</table>
		<hr id="hr2">
		<div class="div">
			<?php
				if (isset($_POST['count'])) {$count=$_POST['count'];}
				$adding=40000 - $_POST['count'];
				$what=$adding * -1;
				if ($count==40000) {
					echo "Your payment is <b>MAXIMUM</b>, your wallet is totally empty now! <br>Lets get back to your boarding school, your friends is waiting for you! <br>They are very hungry!";
					}
				elseif ($count>40000) {
					echo "KOE MUNG NGGOWO DUET 40EWU, MEH JAJAN AKEH?!<br>MBOK KIRO NGGOLEK DUET GAMPANG PO?!! HA?!<br>~Kurangi belanjaan anda sebesar <b><i>IDR ".$what.",00</i></b>~";
				}
				elseif ($count<40000 and $count>30000) {
					echo "Please add your payment count for <i><b>IDR " .$adding.",00</b></i> to make your wallet totally empty!";
					}
				elseif ($count<=30000 and $count>10000) {
					echo "You still have <i><b>IDR " . $adding . ",00</b></i> in your wallet! Use it!<br>Don't Saving Your Money!";
					}
				elseif ($count <=10000 and $count >0) {
					echo "Are You Insane?! Buy more some beer!!!";
					}
				elseif ($count == 0) {
					echo "<b><i>Please insert your total price above!</b></i>";
					}
				elseif ($count<0) {
					echo "Where is your brain dude!!!<br>Use It!!";
					} 
			?>
		</div>
		<br><br>
		<h2 class="h2b">Discount</h2><br>
	<table class="center">
			<tr><td>
				<label>IDR 
					<input class="input1" type="number" name="disk"  placeholder="your total price" value="<?php echo isset($_POST['disk'])?$_POST['disk']:""; ?>" /> ,00
					<input type="submit" value="COUNT" class="input2" />
				</label>
			</td></tr>
			</table>
			<hr id="hr2">
			<div class="div">
				<?php
					if (isset($_POST['disk'])){$disk=$_POST['disk'];}
					$diskon=$_POST['disk']*7/40;					
					$hasil=$_POST['disk']-$diskon;
					 
					if ($disk > 0) {
						echo "Total belanja anda sebesar <i><b>IDR ".$hasil.",00</b></i> <br> diskonnya sebesar <b><i>IDR ".$diskon.",00</b></i><br>Terimakasih telah belanja di Aamiin Mart :)";
						}
					elseif ($disc == 0) {
					echo "<b><i>Please insert your total price above!</b></i>";
						}
					else { echo "Are you alien?"; }				
				?>
			</div><br><br><br>
			<h3>*vers2</h3>
		<table class="center">
			<tr class="nb">
				<td class="pad">*Diskon sebesar =</td>
				<td><ls>
					<li>20% jika total belanja anda >= IDR 500.000,00</li>
					<li>17.5% jika >= IDR 100.000,00</li>
					<li>10% jika >= IDR 50.000,00</li>	
					<li>dibawah IDR 50.000,00 tidak mendapat diskon apapun</li>
				</ls><td> 
			</tr>
		</table>
		<table class="center">
			<tr><td>
				<label>IDR 
					<input class="input1" type="number" name="disc"  placeholder="your total price" value="<?php echo isset($_POST['disc'])?$_POST['disc']:""; ?>" /> ,00
					<input type="submit" value="COUNT" class="input2" />
				</label>
			</td></tr>
			</table>
			<hr id="hr2">
			<div class="div">
				<?php
					if (isset($_POST['disc'])){$disc=$_POST['disc'];}
					$disc1=$_POST['disc']*1/5;
					$disc2=$_POST['disc']*7/40;
					$disc3=$_POST['disc']*1/10;
					$final1=$_POST['disc']-$disc1;					
					$final2=$_POST['disc']-$disc2;
					$final3=$_POST['disc']-$disc3;
					 
					if ($disc >= 100000 and $disc <500000) {
						echo "Total belanja anda sebesar <i><b>IDR ".$final2.",00</b></i> <br> diskonnya sebesar <b><i>IDR ".$disc2.",00</b></i><br>Terimakasih telah belanja di Aamiin Mart :)";
						}
					elseif ($disc >= 500000) {
						echo "Total belanja anda sebesar <i><b>IDR ".$final1.",00</b></i> <br> diskonnya sebesar <b><i>IDR ".$disc1.",00</b></i><br>Terimakasih telah belanja di Aamiin Mart :)";
						}
					elseif ($disc >= 50000 and $disc<100000) {
						echo "Total belanja anda sebesar <i><b>IDR ".$final3.",00</b></i> <br> diskonnya sebesar <b><i>IDR ".$disc3.",00</b></i><br>Terimakasih telah belanja di Aamiin Mart :)";
						}	
					elseif ($disc < 50000 and $disc >= 1000) {
						echo "<b>sayang sekali, anda tidak mendapatkan diskon</b><br>Terimakasih telah belanja di Aamiin Mart :)";
						}
					elseif ($disc < 1000 and $disc > 0) {
						echo "Kamu beli apaan bambankk!!! Sedikit cekalee... <br><b>sayang sekali, anda tidak mendapatkan diskon</b><br>Terimakasih telah belanja di Aamiin Mart :)";
						}
					elseif ($disc == 0) {
					echo "<b><i>Please insert your total price above!</b></i>";
						}
					else { echo "Are you alien?"; }				
				?>
			</div>
		
		</form>
		<h6>~aamiin_mart</h6>
	</body> 
</html>
