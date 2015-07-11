<?php
//Tabla de multiplicar con ciclo while
$tabla = $_GET['nombre'];
//$tabla ="While";
switch ($tabla) {
	case 'For':
	//Tabla de multiplicar con ciclo for
	echo "<table  border=2>";
	echo "<tr>";
	for($ciclo=0;$ciclo<=10;$ciclo++){
		echo "<td>";
		echo "<table  border=2>";
		echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo.":</td></tr>";
		for($ciclo2=0;$ciclo2<=10;$ciclo2++){
			$multiplicacio=$ciclo*$ciclo2;
			echo "<tr align=center><td>".$ciclo."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$multiplicacio."</td></tr>";
		}
		echo "</table>";
		echo "</td>";
	}
	echo "<tr>";
	echo "</table>";
	break;
	case 'While':
	//Tabla de multiplicar con while.
	$numero = 0;
	$ciclo1=1;
	echo "<table border=2>";
	echo "<tr>";
	while($ciclo1<=10){
		echo "<td>";
		echo "<table border=2><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
		$ciclo2=1;
		while($ciclo2<=10){
			$multiplicacio=$ciclo1*$ciclo2;
			echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$multiplicacio."</td></tr>";
			$ciclo2++;
		}
		echo "</table>";
		$ciclo1++;
		echo "</td>";
	}
	echo "</tr>";
	echo "</table>";
	break;
	case 'DoWhile':
	echo "<table border=2>";
	echo "<tr>";
	$ciclo1=1;
	do{
		echo "<td>";
		echo "<table border=2><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
		$ciclo2=1;
		do{
			
			$multiplicacio=$ciclo1*$ciclo2;
			echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$multiplicacio."</td></tr>";
			$ciclo2++;	
		}while($ciclo2<=10);
		echo "</table>";
		$ciclo1++;
		echo "</td>";
	}while($ciclo1<=10);
	echo "</tr";
	echo "</table>";
	break;
	default:
	echo "La table de multiplicar que ingresaste no esta disponible";
	break;
}
?>



