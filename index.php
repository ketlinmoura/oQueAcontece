<!-- INCLUDE DAS CONFIGURAÇÕES BÁSICAS -->
<?php require_once 'config/config_sao_roque.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

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
<body>

<!-- INCLUDE TOPO DO SITE BANNER / MENU -->
<?php include_once 'includes/topo.php'; ?>

<header class="jumbotron">
	<div class="container">
		<h1>Bem Vindo à <?=$cidade_nome?></h1>
		<p><?=$descricao_portal?></p>
		<p>
			<a class="btn btn-primary btn-lg">Veja +</a>
		</p>
	</div>
</header>

<!-- INCLUDE DO RODAPE DO SITE / LINKS JAVASCRIPT-->
<?php require_once 'includes/rodape.php'; ?>

</body>
</html>