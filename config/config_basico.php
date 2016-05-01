<?php 
$data_numero = array();
$data_semana = array();
$qnt_dias_semana = 14;//Quantidade de dias necessário para data


for ($x=0; $x <= $qnt_dias_semana; $x++) { 
	array_push($data_numero, date('d L',strtotime("+$x days")));
	}

?>