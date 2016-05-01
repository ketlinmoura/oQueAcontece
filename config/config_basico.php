<?php 
$data_numero = array();
$data_semana = array();
$qnt_dias_semana = 14;//Quantidade de dias necessário para data


for ($x=0; $x <= $qnt_dias_semana; $x++) { 
	array_push($data_numero, date('d',strtotime("+$x days")));		
	if ($x == 0 ) {
		array_push($data_semana, "Hoje");	
	}else{
		$dia_da_semana = date('l',strtotime("+$x days"));
		switch ($dia_da_semana) {	
			case "Sunday":
				$dia_da_semana = "Domingo";
				break;			
			case "Monday":
				$dia_da_semana = "Segunda";
				break;			
			case "Tuesday":
				$dia_da_semana = "Terca";
				break;			
			case "Wednesday":
				$dia_da_semana = "Quarta";
				break;			
			case "Thursday":
				$dia_da_semana = "Quinta";
				break;			
			case "Friday":
				$dia_da_semana = "Sexta";
				break;

			case "Satudarday":
				$dia_da_semana = "Sábado";
				break;
		}
		array_push($data_semana, $dia_da_semana);
	}
}

?>