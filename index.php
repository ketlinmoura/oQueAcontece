<!-- INCLUDE DAS CONFIGURAÇÕES BÁSICAS -->
<?php 
setlocale (LC_ALL, 'nl_NL');
require_once 'config/config_basico.php';
require_once 'config/config_sao_roque.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<!-- META RESPONSAVEL PARA RENDEREIZAR O TOUCH NO MOBILE FIRST -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- INICIO CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/estrutura_desktop.css">
<link rel="stylesheet" href="css/estrutura_mobile.css">
<link rel="stylesheet" href="css/<?=$estilo_css?>">

<!-- FIM CSS -->
<head>
	<meta charset="UTF-8">
	<title><?=$titulo_home?></title>
</head>
<body class="container-fluid">

<!-- INCLUDE TOPO DO SITE BANNER / MENU -->
<?php include_once 'includes/topo.php'; ?>

<header class="row-fluid">
	
</header>
	
<div class="row-fluid data_semana" >
	<?php 
	for ($x=0; $x <= $qnt_dias_semana; $x++) { 
	?>
		<span><?=$data_numero[$x]?> <br> <?=$data_semana[$x]?></span>
	<?php
	}
	?>
</div>
<article id="eventos">
	<div class="row-fluid">
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
	</div>

	<div class="row-fluid">
		<div class="col-md-6 col-xs-12 col-sm-6">Propaganda</div>
		<div class="col-md-6 col-xs-12 col-sm-6">Propaganda</div>
	</div>
	<div class="row-fluid">
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
		<div class="col-md-3 col-xs-12 col-sm-6">item</div>
	</div>
</article>

<!-- INCLUDE DO RODAPE DO SITE / LINKS JAVASCRIPT-->
<?php require_once 'includes/rodape.php'; ?>

</body>
</html>