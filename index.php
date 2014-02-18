<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		//1. Variablen
		echo "Thema: Devices<br>";
		$a=2013;
		$b="iPad Air from Apple released in ";
		$c=strlen($b);
		echo "String-Länge: $c<br>";
		echo $b . $a . "<br>";

		//2. Arrays
		$d=array('tablet'=>"iPad",'smartphone'=>'iPhone','desktop'=>'iMac');
		print_r($d);
		echo "<br>Am liebsten hätte ich ein $d[desktop]";
		$d[3]="PC";
		$e=count($d);
		echo"<br>Anzahl Werte im Array: " . $e . "<br>";

		//3. Verzweigungen (if-else, switch-case)
		if ($a == 2013) {
			echo "Erscheinungsjahr: 2013";
		} else {
			echo "Erscheinungsjahr: unbekannt";
		}
		echo "<br>";
		switch($e){
			case 1: echo "1 Device"; break;
			case 2: echo "2 Devices"; break;
			case 3: echo "3 Devices"; break;
			case 4: echo "4 Devices"; break;
			default: echo "n Devices"; break;
		}

		//4. Schleifen
		for($i=0;$i<$e;$i++){
			$erg=$i+1;
			echo "<br>$erg. Device";
		}
		$g=2015;
		while($a<$g){
			$h=1;
			echo "<br>Apple hat $h Jahr Vorsprung";
			$a++;
		}
		foreach ($d as $value) {
			echo "<br>$value";
		}

		//5. Funktionen
		function addiere($x,$y=5){
			$res=$x+$y;
			return $res;
		}
		echo "<br>Das Ergebnis ist " . addiere($a);
		echo $res;

	?>
	
	<p>************************************************</p>
	<p><strong>Quellen PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>