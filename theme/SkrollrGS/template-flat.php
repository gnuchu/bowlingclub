<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* template-flat.php
* Skroller theme for GetSimple CMS
* http://get-simple.info/forums/showthread.php?tid=6986
* version 0.6
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php get_site_name(); ?></title>
    <?php get_header(); ?>
    <meta name="robots" content="index, follow" />
    <meta charset="utf-8">
	  
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/layout.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/skin.css" media="all" />
    
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'> 
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <script src="<?php get_theme_url(); ?>/js/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/jquery.bxslider.css">
    
    <script src="<?php get_theme_url(); ?>/js/init.js"></script>
    <script>
      $(document).ready(function () { $('#pages').skrollr({'zeroSlide' : false}); });
    </script>
</head>
    
<body>
    
    <div id="nav">
        <div id="logo"><a href="#" class="slider-goto" data-goto='0'><?php get_site_name(); ?></a></div>
        <a href="#" id='mobile-menu'>&nbsp;</a>

        <ul id="menu">
            <?php 
              if (function_exists('get_i18n_navigation')) get_i18n_navigation(return_page_slug(), 0, 99, I18N_SHOW_MENU); 
              else {
                $menu = "";
                foreach (menu_data() as $page) {
                  $menu .= "<li class='".$page['slug'];
                  if (return_page_slug() == $page['slug']) $menu .= " current";
                  $menu .= "'><a href='#'>".$page['menu_text']."</a></li>";
                }
                echo $menu;
              }
            ?>
        </ul>

    </div>
    
    <div id="content">
        <div id="hero">
            <h1><?php get_site_name(); ?></h1>
            <h2><?php get_component('tagline');	?></h2>
        </div>
        <div id="wrapper">
            <div id="pages">
                
                <?php               
                if (function_exists('get_i18n_navigation')) { //i18n_plugin exists
                  $pages = return_i18n_page_structure(null, true, null);
                  foreach ($pages as $pageData) {
                    $page = $pageData['url'];
                ?>
                    <div class="page <?php echo $page; ?>">
                        <div class="page-wrapper">
                            <h2 class="title"><?php getPageField($page,'title'); ?></h2>
                            <?php getPageContent($page); ?>
                        </div>
                    </div>                
                <?php
                  }
                } else { //core functions
                  foreach (menu_data() as $page) {
               ?>
                    <div class="page <?php echo $page['slug']; ?>">
                        <div class="page-wrapper">
                            <h2 class="title"><?php getPageField($page['slug'],'title'); ?></h2>
                            <?php getPageContent($page['slug']); ?>
                        </div>
                    </div>                    
                <?php
                  }
                }
                ?>

            </div>
        </div>

    </div>
    
    <?php get_footer(); ?>
    
</body>    
</html>