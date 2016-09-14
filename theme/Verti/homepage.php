<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*	GetSimple Verti Theme
*	Verti by HTML5 UP
*	html5up.net | @ajlkn
*	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*****************************************************/

# Include the header template
 include('header.inc.php'); ?>
			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u 12u(medium)">
								<h2>Hi. This is Verti.</h2>
								<p>It's a free responsive site template by HTML5 UP</p>
							</div>
							<div class="5u 12u(medium)">
								<ul>
									<li><a href="#" class="button big icon fa-arrow-circle-right">Ok let's go</a></li>
									<li><a href="#" class="button alt big icon fa-question-circle">More info</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="<?php get_theme_url(); ?>/images/pic01.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Put something here</h2>
												<p>Maybe here as well I think</p>
											</header>
											<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
										</div>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="<?php get_theme_url(); ?>/images/pic02.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>An interesting title</h2>
												<p>This is also an interesting subtitle</p>
											</header>
											<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
										</div>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="<?php get_theme_url(); ?>/images/pic03.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Oh, and finally ...</h2>
												<p>Here's another intriguing subtitle</p>
											</header>
											<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row 200%">
							<div class="4u 12u$(medium)">
								<div id="sidebar">
									<!-- Sidebar -->
										<section>
											<?php get_component('sidebar');	?>
										</section>
								</div>
							</div>
							<div class="8u 12u$(medium)">
								<div id="content">
									<!-- Content -->
										<article>

											<h2><?php get_page_title(); ?></h2>

											<?php get_page_content(); ?>

										</article>
								</div>
							</div>
							
						</div>
					</div>
				</div>

<!-- include the bigfooter template -->
<?php include('bigfooter.inc.php'); ?>
			
