<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*	GetSimple Verti Theme
*	Verti by HTML5 UP
*	html5up.net | @ajlkn
*	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*****************************************************/

# Include the header template
 include('header.inc.php'); ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
							<!-- Content -->
								<article>
									<h2><?php get_page_title(); ?></h2>
										<?php get_page_content(); ?>
								</article>
						</div>
					</div>
				</div>

<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
			
