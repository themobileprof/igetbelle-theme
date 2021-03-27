		<!-- Menu -->
		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<form action="#" class="menu_search_form">
					<input type="text" class="menu_search_input" placeholder="Search" required="required" />
					<button class="menu_search_button">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</form>
				<ul>
					<li class="menu_item"><a href="index.php">home</a></li>
					<li class="menu_item"><a href="services.html">services</a></li>
					<li class="menu_item"><a href="articles.php">articles</a></li>
					<li class="menu_item"><a href="/cart/">Cart</a></li>
				</ul>
			</div>
			<div class="menu_social">
				<ul>
					<li>
						<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home" style="height: 300px;">
			<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
			<!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/articles.jpg" data-speed="0.8"></div> -->

			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/banner_small.png" style="width: 120px;" alt="" /></a>
										</div>
										<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<?php
										wp_nav_menu( array( 
											'theme_location' => 'my-custom-menu', 
											'container_class' => 'header_top_nav',
											'menu_class' => 'd-flex flex-row align-items-center justify-content-start'
											 ) ); 
										?>
										</div>
										<div class="hamburger ml-auto">
											<i class="fa fa-bars" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header_nav" id="header_nav_pin">
						<div class="header_nav_inner">
							<div class="header_nav_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
												<nav class="main_nav">
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li><a href="index.php">Home</a></li>
														<li class="active">
															<a href="about.html">About Us</a>
														</li>
														<li><a href="services.html">Services</a></li>
														<li><a href="articles.php">Articles</a></li>
													</ul>
												</nav>
												<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
													<form action="#" id="search_container_form" class="search_container_form">
														<input type="text" class="search_container_input" placeholder="Search" required="required" />
														<button class="search_container_button">
															<i class="fa fa-search" aria-hidden="true"></i>
														</button>
													</form>
													<?php echo do_shortcode("[woo_cart_but]"); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">iGetBelle Product Store</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
