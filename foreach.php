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

	foreach ($variable_bulan as $month){
		echo $month. "<br>";
	}

	foreach ($variable_bulan as $key => $month) {
		echo $key. $month. "<br>";
	}
	?>

	