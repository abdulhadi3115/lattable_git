<!DOCTYPE>
<html>
<head>
<title>	</title>
</head>
<body>
<form action="foreach1.php" method="post">

<?php 
$variable_bulan = array ("January",
"February",
"March",
"April",
"May","June",
"July",
"August",
"September",
"October",
"November",
"December");
?>

<select name="bln"> 
<?php foreach ($variable_bulan as $month){?>
<option value="<?php echo $month; ?>"><?php echo $month; ?> </option> 
<?php } ?> 
</select>

<select name="thn">
<?php for ($thn=1980; $thn <=2019 ; $thn++) { ?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?> </option> 
<?php }?>
</select>

<select name="thn">
<?php for ($thn=1980; $thn <=2019 ; $thn++) { 
	echo "<option value='$thn'> $thn </option>";
}?>
</select>


<select name="tgl">
<?php for ($tgl=1; $tgl <=31; $tgl++) { ?>
<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?></option>
<?php }?>
</select>

<select name="angka">
	<?php for ($angka=0; $angka <=10; $angka++) { 
		echo "<option valu='$angka'> $angka </option>";
		}?>
	</select>



<input type="submit" name="submit" value="submit">

</form>

<?php 

if(!empty($_POST['submit'])){

$bln = $_POST['bln'];
$thn = $_POST['thn'];
$tgl = $_POST['tgl'];


echo $bln;
echo "<br>";
echo $thn;
echo "<br>";
echo $tgl;

}?>
</body>
</html>