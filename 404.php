<?php get_header(); ?>
		<!-- Home -->

		<div class="home">

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
											<div class="header_top_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="#">Frequently Asked Questions</a></li>
													<li><a href="#">Daily Tracker</a></li>
													<li><a href="#">Get a Doctor</a></li>
												</ul>
											</div>
											<div class="header_top_phone">
												<i class="fa fa-android" aria-hidden="true"></i>
												<span>Chat with Us</span>
											</div>
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
								<div class="home_title">404 - Page Not Found</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title text-success">Sorry, we cannot find the page you are looking for.</div>
						<div>
							You can checkout the vast array of products for pregnant women in our Shop.
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>