<!DOCTYPE html>
<html>
	<head>
		<title>BestBiz Corporation</title>
		<link rel="stylesheet" href="<?=THEME_DIR?>/style.css">
		<link rel="stylesheet" href="<?=THEME_DIR?>/css/main.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<a href="<?=URL?>" id="logo"><img alt="BestBiz Logo" src="wp-content/themes/labyrinththeme/img/logo.png"></a>
				<span id="search"><form><input type="text"><input type="submit" value="Search"></form></span>
				<?php wp_nav_menu(array('menu' => 'Header Menu', 'menu_id' => 'main-nav', 'container' => '')); ?>
			</div>
			<div id="banner"><img src="wp-content/themes/labyrinththeme/img/banner-home.jpg"></div>
			<div id="content">