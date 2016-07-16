<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<title><?php  echo $titulo; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>src/boot/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>src/boot/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>src/boot/css/index.css">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>src/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>src/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>src/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>src/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>src/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>src/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>src/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>src/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>src/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>src/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>src/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>src/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>src/icon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url(); ?>src/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#C92020">
	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>src/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#C92020">
</head>
<body>
<header class="bg-primary">
	<!--
	<a href="#" id="btn-open-menu">
		<span class="glyphicon glyphicon-menu-hamburger"></span>
	</a>
	-->
	<div class="flexbox">
	<?php echo 
	anchor("site/projeto/",'<span class="glyphicon glyphicon-file"></span> Projetos','class="link-bar"'); 
	?>
	<a href="/">
		<img src="<?php echo base_url(); ?>src/img/logo_site_vagner.png"/>
	</a>
	<?php echo 
	anchor("site/sobre/",'Sobre <span class="glyphicon glyphicon-info-sign"></span>','class="link-bar"'); 
	?>
	</div>
</header>
<div id="menu">
<div id="menuinterno" class="list-group">
	<div style="text-align: right;padding: 7px;font-size: 20px">
		<a href="#" id="btn-close-menu">
			<span class="glyphicon glyphicon-remove"></span>
		</a>
	</div>
	<a href="#" class="list-group-item">Fechar</a>
	<a href="#" class="list-group-item">Fechar</a>
	<a href="#" class="list-group-item">Fechar</a>
</div>
</div>
<div id="corpo" class="container-fluid">