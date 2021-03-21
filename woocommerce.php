<?php get_header(); ?>
		<!-- Home -->

		<div class="home">
			<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
			<!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/articles.jpg" data-speed="0.8"></div> -->

			<!-- Header -->

			<header class="header" id="header">
				<div>
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
								<div class="home_title">iGetBelle Pregnancy Store</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about">
			<div class="container">
				<div class="row about_row row-eq-height">
					<div class="col">
						<div class="about_text">
							<?php woocommerce_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>
