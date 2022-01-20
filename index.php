<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>php resultsheet</title>
	</head>
	<body>

	<table border="0" cellpadding="20" cellspacing="" style="background:#dddae0;">
				<tr style="background:#d6d3d7; width:30%;">
					<td><b>Name</b></td>
					<td><b>Grade</b></td>
			    </tr> 
			
				<tr style="background:#e7e4eb;">
					<td>Ruma</td>
					<td>
						<?php
							$name=array("A+", "A", "A-","B","C","D");
							echo  "  $name[0] ";
		 				?>
 					</td>
				</tr>
				
				<tr style="background:#e7e4eb;">
					<td>Zuma</td>
					<td>
						<?php
							$name=array("A+", "A", "A-","B","C","D");
							echo  "  $name[1] ";
		 				?>
 					</td>
				</tr>

				<tr style="background:#e7e4eb;">
					<td>Shuma</td>
					<td>
						<?php
							$name=array("A+", "A", "A-","B","C","D");
							echo  "  $name[2] ";
		 				?>
 					</td>
				</tr>

				<tr style="background:#e7e4eb;">
					<td>Muna</td>
					<td>
						<?php
							$name=array("A+", "A", "A-","B","C","D");
							echo  "  $name[3] ";
		 				?>
 					</td>
				</tr>

				<tr style="background:#e7e4eb;">
					<td>Luna</td>
					<td>
						<?php
							$name=array("A+", "A", "A-","B","C","D");
							echo  "  $name[4] ";
		 				?>
 					</td>
				</tr>
				
			</table>
	












	<?php 
		

		$name=array("A+", "A", "A-");
		echo "Ruma got " . $name[0]  . ", "."Zuma got " . $name[1] . "," . "Shuma got
 		" .$name[2];echo"<br>";


 		$marksAbul = 66;
			
			
		
			if($marksAbul >=80 && $marksAbul <=100) {
				echo "Abul Obtained A+";
			}else if($marksAbul >=70 && $marksAbul <=79) {
				echo "Abul Obtained A";
			}else if($marksAbul >=60 && $marksAbul <=69) {
				echo "Abul Obtained A-";
			}else if($marksAbul >=50 && $marksAbul <=59) {
				echo "Abul Obtained B";
			}else if($marksAbul >=40 && $marksAbul <=49) {
				echo "Abul Obtained C";
			}else if($marksAbul >=33 && $marksAbul <=39) {
				echo "Abul Obtained D";
			}else if($marksAbul >=0&& $marksAbul <=32) {
				echo "Abul Obtained F";
			}else {
				echo "Invalid";
			}echo "<br>";

			
			
			$marksJamal = 22;
			if($marksJamal >=80 && $marksJamal <=100) {
				echo "Jamal Obtained A+";
			}else if($marksJamal >=70 && $marksJamal <=79) {
				echo "Jamal Obtained A";
			}else if($marksJamal >=60 && $marksJamal <=69) {
				echo "Jamal Obtained A-";
			}else if($marksJamal >=50 && $marksJamal <=59) {
				echo "Jamal Obtained B";
			}else if($marksJamal >=40 && $marksJamal <=49) {
				echo "Jamal Obtained C";
			}else if($marksJamal >=33 && $marksJamal <=39) {
				echo "Jamal Obtained D";
			}else if($marksJamal >=0&& $marksJamal <=32) {
				echo "Jamal Obtained F";
			}else {
				echo "Invalid";
			}
		 
	 ?>
	</body>
	</html>