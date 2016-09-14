<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Summit theme for GetSimple CMS
*
*****************************************************/

# Get this theme's settings based on what was entered within it's plugin. 
# This function is in functions.php 
Summit_Settings();

# Include the header template
include('header.inc.php'); 
?>


	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><?php get_page_title(); ?></h2>
						
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><?php get_page_content(); ?></p>


							
<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('jS F Y'); ?></time></p>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<?php include('sidebar.inc.php'); ?>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<?php include('footer.inc.php'); ?>
</body>
</html>
