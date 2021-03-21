<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title text-success">
							<div>
								Articles
							</div>
						</div>
					</div>
				</div>
			
			
				<div class="row about_row row-eq-height">
					<div class="col">
						<div class="about_text">
						<?php
						if ( have_posts() ) {
							$counter = 1;
							while ( have_posts() ) {
								the_post();
								?>

									<!--Grid column-->
									<div class="col-lg-4 col-md-12 mb-4">
										<!--Featured image-->
										<div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
											<?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
											<a href="<?php echo get_permalink() ?>">
												<div class="mask"></div>
											</a>
										</div>

										<!--Excerpt-->
										<a href="" class="pink-text">
											<h6 class="mb-3 mt-4">
												<i class="fa fa-bolt"></i>
												<strong> <?php the_category(', '); ?></strong>
											</h6>
										</a>
										<h4 class="mb-3 font-weight-bold dark-grey-text">
											<strong><?php the_title(); ?></strong>
										</h4>
										<p>by
											<a href="<?php echo get_permalink() ?>" class="font-weight-bold dark-grey-text"><?php echo get_the_author(); ?></a>, <?php echo get_the_date(); ?></p>
										<p class="grey-text"><?php the_excerpt(); ?></p>
										<a href="<?php echo get_permalink() ?>" class="btn btn-info btn-rounded btn-md">Read more</a>
									</div>
									<!--Grid column-->

								<?php
								if ($counter % 3 == 0) {
								?>
									</div>
									<!--Grid row-->
									<!--Grid dynamic row-->
									<div class="row wow fadeIn">
								<?php
								}
								$counter++;
							} // end while
						} // end if
						?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<?php mdb_pagination(); ?>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>