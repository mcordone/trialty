<?php
            require('config.php');

        $con = mysql_connect($dbhost,$dbuser,$dbpass);

        if (!$con)

          {

          die('Could not connect: ' . mysql_error());
          }


        mysql_select_db($dbbase, $con);
?>

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no">
	<!--	<link rel="icon" type="image/x-icon" href="images/favicon.png" /> -->
		<title>Contacto - Trialty</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CMontserrat%3A700%2C400&amp;subset=cyrillic%2Ccyrillic-ext%2Clatin%2Cgreek-ext%2Cgreek%2Clatin-ext%2Cvietnamese&amp;ver=1.6.11" type="text/css" media="all">
		<link rel='stylesheet' href='js/vendor/booked/font-awesome.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='js/vendor/essgrid/tooltipster.css' type='text/css' media='all' />
		<link rel='stylesheet' href='js/vendor/essgrid/tooltipster-light.css' type='text/css' media='all' />
		<link rel='stylesheet' href='js/vendor/booked/styles.css' type='text/css' media='all' />
		<link rel='stylesheet' href='js/vendor/revslider/settings.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/_animation.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/shortcodes.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/skin.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/custom-style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/colors.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/responsive.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/skin.responsive.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />
	</head>
	<body class="body_style_wide responsive_menu scheme_original top_panel_show top_panel_above sidebar_hide">
		<div class="body_wrap">
			<div class="page_wrap">
				<?php include('menu.php'); ?>
				<!--<header class="top_panel_wrap top_panel_style_1 scheme_original">
					<div class="header-bg">
						<div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
							<div class="content_wrap clearfix">
								<div class="top_panel_logo">
									<div class="logo">
										<a href="index.html"><img src="images/logo-header1.jpg" class="logo_main" alt=""></a>
									</div>
								</div>
								<div class="top_panel_contacts">
									<div class="top_panel_contacts_left">
										<div class="contact_phone">121 King Street, NY, USA</div>
										<div class="contact_email">contact@yoursite.com</div>
									</div>
									<div class="top_panel_contacts_right">call us: <strong><i>800</i> 123 45 67</strong></div>
									<div class="cL"></div>
								</div>
								<div class="top_panel_menu">
									<a href="#" class="menu_main_responsive_button icon-down">Select menu item</a>
									<nav class="menu_main_nav_area">
										<ul id="menu_main" class="menu_main_nav">
											<li class="menu-item menu-item-has-children">
												<a href="#">Home</a>
												<ul class="sub-menu">
													<li class="menu-item"><a href="index.html">Home 1</a></li>
													<li class="menu-item"><a href="home2.html">Home 2</a></li>
													<li class="menu-item"><a href="home3.html">Home 3</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Features</a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-has-children">
														<a href="#">Elements</a>
														<ul class="sub-menu">
															<li class="menu-item"><a href="typography.html">Typography</a></li>
															<li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
															<li class="menu-item"><a href="404.html">Page 404</a></li>
															<li class="menu-item"><a href="faqs.html">FAQs</a></li>
															<li class="menu-item"><a href="support.html">Support</a></li>
														</ul>
													</li>
													<li class="menu-item"><a href="booking.html">Booking</a></li>
													<li class="menu-item"><a href="customization.html">Customization</a></li>
													<li class="menu-item"><a href="video-tutorials.html">Video tutorials</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">About us</a>
												<ul class="sub-menu">
													<li class="menu-item"><a href="about.html">About</a></li>
													<li class="menu-item menu-item-has-children">
														<a href="#">Team</a>
														<ul class="sub-menu">
															<li class="menu-item"><a href="team.html">Our agents</a></li>
															<li class="menu-item"><a href="single-team.html">Agent&#8217;s profile</a></li>
														</ul>
													</li>
													<li class="menu-item menu-item-has-children">
														<a href="#">Services</a>
														<ul class="sub-menu">
															<li class="menu-item"><a href="services.html">Our Services</a></li>
															<li class="menu-item"><a href="single-service.html">Service Single Page</a></li>
														</ul>
													</li>
													<li class="menu-item"><a href="pricing.html">Pricing</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Listing</a>
												<ul class="sub-menu">
													<li class="menu-item"><a href="listing.html">All property</a></li>
													<li class="menu-item"><a href="single-property.html">Single property</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Gallery</a>
												<ul class="sub-menu">
													<li class="menu-item"><a href="gallery-grid.html">Grid</a></li>
													<li class="menu-item"><a href="gallery-masonry.html">Masonry</a></li>
													<li class="menu-item"><a href="gallery-cobbles.html">Cobbles</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Blog</a>
												<ul class="sub-menu">
													<li class="menu-item"><a href="classic-with-sidebar.html">Classic With Sidebar</a></li>
													<li class="menu-item"><a href="classic-without-sidebar.html">Classic Without Sidebar</a></li>
													<li class="menu-item menu-item-has-children">
														<a href="#">Masonry</a>
														<ul class="sub-menu">
															<li class="menu-item"><a href="masonry-2-columns.html">Masonry 2 columns</a></li>
															<li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 columns</a></li>
														</ul>
													</li>
													<li class="menu-item menu-item-has-children">
														<a href="#">Portfolio</a>
														<ul class="sub-menu">
															<li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 columns</a></li>
															<li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 columns</a></li>
														</ul>
													</li>
													<li class="menu-item"><a href="post-formats.html">Post Formats</a></li>
												</ul>
											</li>
											<li class="menu-item current-menu-item"><a href="contacts.html">Contacts</a></li>
										</ul>
									</nav>
								</div>
								<div class="cL"></div> -->
							</div>
						</div>
						<div class="top_panel_title top_panel_style_1  title_present scheme_original">
							<div class="top_panel_title_inner top_panel_inner_style_1 breadcrumbs_present_inner">
								<div class="content_wrap">
									<h1 class="page_title">Contacto</h1>
									<div class="breadcrumbs"><a class="breadcrumbs_item home" href="index.php">Inicio</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Contacto</span></div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="page_content_wrap page_paddings_no">
					<div class="sc_section">
						<div class="content_wrap">
							<div class="columns_wrap">
							<div class="column-1_2">
								<div class="sc_section margin_top_xlarge margin_bottom_xlarge">
									<div class="sc_section_inner">
										<div class="bgtext1">

											<p>
											<?php /* if($_GET['tema'] == 'busqueda'){ echo 'NO ENCUENTRAS LO QUE BUSCAS'; } 
if($_GET['tema'] == 'contacto' || $_GET['tema'] == ''){ echo 'CONTACTANOS'; }
if($_GET['tema'] == 'publicidad'){ echo 'PUBLICITATE CON NOSOTROS'; }
										*/	?></p>
										</div>
										<h3 class="sc_title ind1 margin_top_null margin_bottom_null">
										<?php if($_GET['tema'] == 'busqueda'){ echo 'NO ENCUENTRAS LO QUE BUSCAS'; } 
if($_GET['tema'] == 'contacto'){ echo 'CONTACTANOS'; }
if($_GET['tema'] == 'publicidad'){ echo 'PUBLICITATE CON NOSOTROS'; }
											?></h3>
										<p>Nosotros podemos ayudarte</p>
										<div class="margin_top_xmedium">
											<p><?php if($_GET['tema'] == 'busqueda'){ echo $texto_busqueda; } 
if($_GET['tema'] == 'contacto' || $_GET['tema'] == ''){ echo $texto_contacto; }
if($_GET['tema'] == 'publicidad'){ echo $texto_publicidad; }
											?></p>
										</div>
										<div class="columns_wrap sc_columns margin_top_xmedium margin_bottom_xmedium">
											<div class="column-1_2 sc_column_item">
												<ul class="sc_list sc_list_style_iconed">
													<li class="sc_list_item">
														<span class="sc_list_icon icon-message106 color_2"></span>
														<p><?php echo $contacto; ?></p>
													</li>
													<li class="sc_list_item">
														<span class="sc_list_icon icon-open97 color_2"></span>
														<p>www.trialty.com</p>
													</li>
												</ul>
											</div>
											<div class="column-1_2 sc_column_item">
												<ul class="sc_list sc_list_style_iconed">
													<li class="sc_list_item">
														<span class="sc_list_icon icon-mobile29 color_2"></span>
														<p><?php echo $telefono; ?></p>
													</li>
												</ul>
											</div>
										</div>
										<div class="sc_socials sc_socials_type_icons sc_socials_size_small">
											<div class="sc_socials_item"><a href="<?php echo $facebook; ?>" target="_blank" class="social_icons"><span class="icon-facebook"></span></a></div>
											<div class="sc_socials_item"><a href="<?php echo $twitter; ?>" target="_blank" class="social_icons"><span class="icon-twitter"></span></a></div>
											<div class="sc_socials_item"><a href="<?php echo $instagram; ?>" target="_blank" class="social_icons"><span class="icon-instagramm"></span></a></div>
											<div class="sc_socials_item"><a href="<?php echo $google; ?>" target="_blank" class="social_icons"><span class="icon-plus-1"></span></a></div>
											<div class="sc_socials_item"><a href="<?php echo $pinterest; ?>" target="_blank" class="social_icons"><span class="icon-linkedin"></span></a></div>
											<div class="sc_socials_item"><a href="<?php echo $youtube; ?>" target="_blank" class="social_icons"><span class="icon-youtube-play"></span></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="column-1_2">
								<div class="sc_section margin_top_xlarge margin_bottom_xlarge">
									<div class="sc_section_inner">
										<figure class="sc_image"><img src="images/logo_trialty.jpg" alt="" /></figure>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="sc_section bg_color_1">
						<div class="columns_wrap sc_columns">
							<div class="column-1_2 sc_column_item">
								<div id="sc_googlemap_1" class="sc_googlemap" data-zoom="18" data-style="default">
									<div class="sc_googlemap_marker" data-title="" data-description="" data-latlng="" data-address="121 King Street, NY, USA" data-point="images/logo-map.png"></div>
								</div>
							</div>
							<div class="column-1_2 sc_column_item">
								<div class="sc_section custom_box_form ">
									<div class="sc_section_inner">
										<h4 class="sc_title margin_top_null margin_bottom_xmedium">Escribenos</h4>
										<div class="sc_form_wrap">
											<!--<div class="sc_form"> -->
												<form  data-formtype="form_custom" method="post" action="sendmail.php?tema=<?php echo $_GET['tema']; ?>">
													<div class="sc_form_info">
														<div class="sc_form_item sc_form_field"><input id="sc_form_username" type="text" name="username" placeholder="Nombre *"></div><br>
														<div class="sc_form_item sc_form_field"><input id="sc_form_email" type="text" name="email" placeholder="E-mail *"></div><br>
														<div class="sc_form_item sc_form_field"><input id="sc_form_subj" type="text" name="subject" placeholder="Telefono *">
<input type="hidden" name="vendedor" value="<?php echo $_GET['vendedor']; ?>">

														</div>
													</div><br>
													<div class="sc_form_item sc_form_message"><textarea id="sc_form_message" name="message" placeholder="Mensaje"></textarea></div><br>
													<div class="sc_form_item sc_form_button"><button class="sc_button sc_button_box sc_button_style_style3">Enviar</button></div>
						
												</form>
										<!--	</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--
				<div class="contacts_emailer_wrap">
					<div class="content_wrap">
						<div class="sc_emailer">
							<div class="sc_emailer_title">Sign up for updates</div>
							<div class="sc_emailer_content">
								<form class="sc_emailer_form">
									<input type="text" class="sc_emailer_input" name="email" value="" placeholder="Please, enter you email address.">
									<a href="#" class="sc_emailer_button sc_button sc_button_box sc_button_style_style3" title="Submit">subscribe</a>
								</form>
							</div>
							<div class="cL"></div>
						</div>
					</div>
				</div>
			-->
				 <?php include('footer.php'); ?>
				<!-- <footer class="footer_wrap widget_area scheme_original">
					<div class="footer_wrap_inner widget_area_inner">
						<div class="content_wrap">
							<div class="columns_wrap">
								<aside class="column-1_4 widget widget_text">
									<h5 class="widget_title">contacts</h5>
									<div class="textwidget">
										We are the leading real estate and rental marketplace dedicated to empowering consumers with data.
										<br>
										<br>
										<div class="footer-widget-contacts">
											<span class="accent1h margin_right_tiny icon-location"></span> 121 King Street, NY, USA
											<br>
											<span class="accent1h margin_right_tiny icon-tablet"></span> +800 1234 56 78
											<br>
											<span class="accent1h margin_right_tiny icon-mail"></span> contact@yoursite.com
										</div>
									</div>
								</aside>
								<aside class="column-1_4 widget widget_recent_posts">
									<h5 class="widget_title">from the blog</h5>
									<article class="post_item">
										<div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
										<div class="post_content">
											<div class="post_title"><a href="single-post.html">Making the Most of Your Small Space with Furniture</a></div>
											<div class="post_info"><span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
											</div>
										</div>
									</article>
									<article class="post_item">
										<div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
										<div class="post_content">
											<div class="post_title"><a href="single-post.html">4 Ways to Decorate Your First Apartment on a Budget</a></div>
											<div class="post_info"><span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
											</div>
										</div>
									</article>
									<article class="post_item">
										<div class="post_thumb"><img alt="" src="images/50x50.jpg"></div>
										<div class="post_content">
											<div class="post_title"><a href="single-post.html">How to Infuse Your Space with Natural Light</a></div>
											<div class="post_info"><span class="post_info_item">by <a href="#" class="post_info_author">Jesse Doe</a></span> <span class="post_info_item">on <a href="single-post.html">March 9, 2016</a></span>
											</div>
										</div>
									</article>
								</aside>
								<aside class="column-1_4 widget widget_nav_menu">
									<h5 class="widget_title">quick links</h5>
									<div>
										<ul class="menu">
											<li class="menu-item"><a href="index.html">Home</a></li>
											<li class="menu-item"><a href="support.html">Support</a></li>
											<li class="menu-item"><a href="about.html">About us</a></li>
											<li class="menu-item"><a href="listing.html">Listing</a></li>
											<li class="menu-item"><a href="gallery.html">Gallery</a></li>
											<li class="menu-item"><a href="contacts.html">Contacts</a></li>
										</ul>
									</div>
								</aside>
								<aside class="column-1_4 widget widget_twitter">
									<h5 class="widget_title">latest tweets</h5>
									<ul>
										<li class="theme_text"><a href="https://twitter.com/axiomthemes" class="username" target="_blank">@axiomthemes</a> For the little ones: bright and colorful, modern and professional #ecommerce #WP #site #template White Rabbit! <a href="https://themeforest.net/item/white-rabbit-kids-toys-clothing-store/16846054?s_rank=1" target="_blank">themeforest.net/item/white-rab…</a></li>
										<li class="theme_text"><a href="https://twitter.com/axiomthemes" class="username" target="_blank">@axiomthemes</a> We continue #summer #sports and #tournaments topic! Check out Soccer Club #WordPess theme by Axiom: <a href="https://themeforest.net/item/soccer-club-wordpess-theme/16340049?s_rank=1" target="_blank">themeforest.net/item/soccer-cl…</a></li>
									</ul>
								</aside>
							</div>
						</div>
					</div>
				</footer>
				<footer class="contacts_wrap">
					<div class="contacts_wrap_inner">
						<div class="content_wrap">
							<div class="columns_wrap">
								<div class="column-1_4 show_logo_footer">
									<div class="logo">
										<a href="index.html"><img src="images/logo-footer.jpg" alt=""></a>
									</div>
								</div>
								<div class="column-2_4">
									<h5>about us</h5>
									We are the leading real estate and rental marketplace dedicated to empowering consumers with data, inspiration and knowledge around the place they call home, and connecting them with the best local professionals who can help.
								</div>
								<div class="column-1_4">
									<h5>follow us</h5>
									<div class="sc_socials sc_socials_type_icons sc_socials_size_small">
										<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-facebook"></span></a></div>
										<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-twitter"></span></a></div>
										<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-instagramm"></span></a></div>
										<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-plus-1"></span></a></div>
										<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-linkedin"></span></a></div>
										<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons"><span class="icon-youtube-play"></span></a></div>
									</div>
								</div>
								<div class="cL"></div>
							</div>
						</div>
					</div>
				</footer>
				<div class="copyright_wrap copyright_style_menu scheme_original">
					<div class="copyright_wrap_inner">
						<div class="content_wrap">
							<ul class="menu_footer_nav">
								<li class="menu-item"><a href="#">Disclaimer</a></li>
								<li class="menu-item"><a href="#">Privacy</a></li>
								<li class="menu-item"><a href="#">Advertisement</a></li>
								<li class="menu-item"><a href="contacts.html">Contact us</a></li>
							</ul>
							<div class="copyright_text">ESTATE © 2016 All Rights Reserved</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<a href="#" class="scroll_to_top icon-up"></a>
		<script type='text/javascript' src='js/vendor/jquery.js'></script>
		<script type='text/javascript' src='js/custom/plugins.js'></script>
		<script type='text/javascript' src='js/custom/messages.js'></script>
		<script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
		<script type='text/javascript' src='js/vendor/ui/jquery-ui.min.js'></script>
		<script type='text/javascript' src='js/vendor/superfish.js'></script>
		<script type='text/javascript' src='js/custom/_utils.js'></script>
		<script type='text/javascript' src='js/custom/_init.js'></script>
		<script type='text/javascript' src='js/custom/_shortcodes.js'></script>
		<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
		<script type='text/javascript' src='js/custom/_googlemap.js'></script>
	</body>
</html>