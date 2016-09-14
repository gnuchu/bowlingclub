<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		header.inc.php
* @Package:		GetSimple
* @Action:		Summit theme for GetSimple CMS
*
*****************************************************
/
/ Theme adapted by osDesk.org for GetSimple CMS 3.1.2
/ Based on Recreation from freecsstemplates.org
/ Creative Commons Attribution 2.5 License
/ Header graphic from morguefile.com/license/morguefile
/
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">
  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	
	<?php get_header(); ?>
	
</head>

<body id="<?php get_page_slug(); ?>" >

<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<?php get_navigation(get_page_slug(FALSE)); ?>
		</ul>
	</div>
	<!-- end #menu -->
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a></h1>
		</div>
	</div>
</div>
<div id="banner"><a href="<?php get_site_url(); ?>" title="<?php get_site_name(); ?>" class="img-style"><img src="<?php get_theme_url(); ?>/images/img04.jpg" width="1000" height="350" alt="" /></a></div>
<div id="wrapper">
	<!-- end #header -->