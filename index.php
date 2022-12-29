<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>PHP Calculator</h1>
		<div class="form-content">
			<form method="POST">
				<input type="number" name="fnum" placeholder="First number"> <br>
				<input type="number" name="snum" placeholder="Second number"> <br>
				<select name="operation">
					<option value="add">ADDITION</option>
					<option value="sub">SUBTRACTION</option>
					<option value="mul">MULTIPLICATION</option>
					<option value="div">DIVISION</option>
				</select><br>
				<input type="submit" name="submit" value="CALCULATE" id="btn">
			</form>
	
		</div>
		<div class="result">
				<h2>
					<?php
						if(isset($_POST['submit'])){
							$fnum = (int)$_POST['fnum'];
							$snum = (int)$_POST['snum'];
							$opt = $_POST['operation'];


							switch($opt){
								case 'add': echo 'Result is '.$fnum+$snum; break;
								case 'sub': echo 'Result is '.$fnum-$snum; break;
								case 'mul': echo 'Result is '.$fnum*$snum; break;
								case 'div': 
									try{
										if($snum == 0){
											throw new Exception('Division by zero is not defined');
										}
										else{
											echo 'Result is '.$fnum/$snum; break;
										}
										
									}
									catch(Exception $e){
										echo 'Error: '.$e->getMessage();
									}
									
									
									
									
							}
						}
					?>
				</h2>
		</div>
		
	</div>
	
</body>
</html>