<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Verti theme for GetSimple CMS
*
*****************************************************/
?>
<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row" id="short-footer">
							<div class="12u">
								<!-- Contact -->
									<section class="widget contact">
										<h3>Contact Us</h3>
										<p>
											<a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a>
											<a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a>
											<a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a>
											<a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a>
											<a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a>
										</p>
										<address>1234 Fictional Road, Nashville, TN 00000, (800) 555-0000</address>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy;<?php echo date('Y'); ?> <?php get_site_name(); ?>. All rights reserved</li><li><?php get_site_credits(); ?></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>
		<?php get_footer(); ?>

		<!-- Scripts -->
			<script src="<?php get_theme_url(); ?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php get_theme_url(); ?>/assets/js/skel.min.js"></script>
			<script src="<?php get_theme_url(); ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php get_theme_url(); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php get_theme_url(); ?>/assets/js/main.js"></script>

	</body>
</html>
