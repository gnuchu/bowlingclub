<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Summit theme for GetSimple CMS
*
*****************************************************/
?>


<?php get_footer(); ?>

<div id="footer">
	<p>&copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a>  | Summit Theme from <a href="http://osdesk.org/" target="_blank">osDesk</a> based on <a href="http://www.freecsstemplates.org" target="_blank">FCT</a>.  <?php get_site_credits(); ?></p>
</div>
<!-- end #footer -->