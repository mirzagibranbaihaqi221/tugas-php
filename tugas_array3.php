	<html>
	<head>
			</head>
					<body>
<hr>
							<h2>program input NILAI</h2>
							
								<form action="" method="post">
								
								<label>
									nilai :<input type="number" name= "nilai" value = "<?php echo isset($_POST['nilai'])?$_POST['nilai']:"";?>" />
								</label>
				
								<input type="submit" value="lihat"/>

								<br><br>



<?php

						if (isset($_POST['nilai']))
						{
							$nilai= $_POST['nilai'];

						if($nilai >= 90)
						{
								echo "wahh anda hebat A";
						}
				
						else if($nilai >=75)
						{
								echo "hmmmm lumayan lah ,nilai mu B";
						}
				
						else if($nilai >=65)
						{
								echo "cukup..... C";
						}

						else if($nilai >=40)
						{
								echo "belajar lagi ya!!";
						}

						else
						{
								echo "...... serius?????";
						}
						}


				?>

<hr>
					<h2>alat penghitung </h2>



								<input type="number" name="angka_1" placeholder="angka_1" value="<?php echo isset($_POST['angka_1'])?$_POST['angka_1']:"";?>" />
								+
								<input type="number" name="angka_2" placeholder="angka_2" value="<?php echo isset($_POST['angka_2'])?$_POST['angka_2']:"";?>" />
								<button type="submit" name="submitplus">kerjakan</button>
								<br><br>

										<?php

											if (isset($_POST['angka_1']) and ($_POST['angka_2']))
											{

													$angka_1 = $_POST["angka_1"];
													$angka_2 = $_POST["angka_2"];

											echo "<i>" .$angka_1. "+" .$angka_2. "=" .($angka_1+$angka_2)."</i>";
											}
											
											else
											{
												echo "<i>wahhh belom ke isi ini</i>";
											}

											?>
<<hr>
					</form>			

					</body>


</html>

