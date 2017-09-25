<?php 
	$semana=1;
	for($dia=1;$dia<=date('t');$dia++) {
		$dia_semana=date('N' , strotine(date('Y-m').'-'.$dia));
		$calendario[$semana][$dia_semana] =$dia;
		if ($dia_semana ==7) { $semana++;};
	}
?>


echo date('t'); ?>



<!DOCTYPE html>
<head>
</head>

<body>
	<table border="1">
		<tr>
			<td>Lunes</td>
			<td>Martes</td>
			<td>Miercoles</td>
			<td>Jueves</td>
			<td>Viernes</td>
			<td>Sabado</td>
			<td>Domingo</td>
		
		</tr>
	
	</table>

</body>
