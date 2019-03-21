<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="select.php" method="post">
	





	<?php
	$variable_bulan = array("January",
							"February",
							"March",
							"April",
							"May",
							"June",
							"July",
							"Agust",
							"September",
							"October",
							"November",
							"Desember");
	?>
	<div>
		<select name="month">
			<?php foreach ($variable_bulan as $month) { ?>
				<option value="<?php echo $month; ?>"><?php echo $month; ?> </option>
			<?php } ?>
		</select>
		


		<select name="tgl">
			<?php for ($tgl=0; $tgl <= 31 ; $tgl++) { ?>
				<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?> </option>
			<?php } ?>
		</select>



		<select name="years">
			<?php for ($thn=1995; $thn < date("Y") ; $thn++) { ?>
				<option value="<?php echo $thn; ?>"> <?php echo $thn; ?> </option>
			<?php } ?>
		</select>


		<select name="test"> 
		  <?php for ($x=0; $x < 4 ; $x++){?>
		  <option value="volvo"><?php echo $x;?></option>
		  <?php }?>
		</select>
		  
	</div>

	<div>
		<input type="submit" name="submit" value="submit">
	</div>


	
</form>

	<?php

	if (!empty($_POST['submit'])) {

		$tgl = $_POST['tgl'];
		$month = $_POST['month'];
		$years = $_POST['years'];
		$test = $_POST['test'];



		echo $tgl;
		echo $month;
		echo $years;
		echo $test;

	}

	?>


</body>
</html>