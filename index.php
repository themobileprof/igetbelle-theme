<?php get_header(); ?>
		<!-- Home -->

		<div class="home">
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
								<div class="home_title">iGetBelle Store</div>
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
						<div class="section_title text-success">
						<div>
						<?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
							<h2>
							<a href="<?php the_permalink() ?>">
								<?php the_title(); ?>
							</a>
							</h2>
							<?php the_content(); ?>
						<?php endwhile; else: ?>
							<p>There no posts to show</p>
						<?php endif; ?>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>