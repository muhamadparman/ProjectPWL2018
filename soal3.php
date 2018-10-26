<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	function myFunction(){
	static $bakso = 12000;
	static $soto = 9000;
	static $teh = 2000;
	static $jeruk = 3000;
	$jumlah = (2*$bakso)+(2*$soto)+(2*$teh)+(2*$jeruk);
	echo $jumlah;
	$jumlah++;
}

myFunction();
echo "<br>";
myFunction();
echo "<br>";
?>
</body>
</html>