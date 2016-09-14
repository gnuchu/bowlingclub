<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		header.inc.php
* @Package:		GetSimple
* @Action:		Verti theme for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php get_page_clean_title(); ?> &mdash; <?php get_site_name(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php get_theme_url(); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/ie8.css" /><![endif]-->
		<script src="<?php get_theme_url(); ?>/assets/js/jquery.min.js"></script>
		<?php get_header(); ?>
	</head>
	<body class="right-sidebar" id=“<?php get_page_slug(); ?>”>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
								<span><?php get_component('tagline'); ?></span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<?php if (function_exists('get_i18n_navigation'))
									{echo(get_i18n_navigation(return_page_slug(),0,2,I18N_SHOW_MENU));}
									else { get_navigation(return_page_slug()); }  ?>
								</ul>
							</nav>

					</header>
				</div>
