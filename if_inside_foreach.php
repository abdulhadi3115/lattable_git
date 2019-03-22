<?php
			//index 0	//index 1	//index 2
$bulan= array('Januari','Februari','Maret','april','desember');

foreach ($bulan as $index => $value) {
	if ($value == "Maret") {
		//cetak bulan 2 maret

		echo "kenalan " . $index."  ". $value;
		echo "<br>";
		
	}
	elseif ($value=="desember") {
		echo "Cetak Bulan " . $index."  ". $value;
		echo "<br>";

	}
	elseif ($value=="Januari") {
		echo "pacaran " . $index."  ". $value;
		echo "<br>";
	}
	 else {
		//bukan bulan maret yaitu bulan januari
		//bukan bulan maret yaitu bulan februari

		echo "nikah". $value;
		echo "<br>";
	}
	
}

?>