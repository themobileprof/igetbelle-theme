<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
		<div class="news" style="padding-top: 0;">
			<div class="container">
				<div class="row row-eq-height">
					<div class="col-lg-8">
						<div class="about_text">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<!-- News Post -->
							<div class="news_post">
								<div class="news_post_image embed-responsive embed-responsive-21by9"><?php the_post_thumbnail('my-custom-image-size'); ?></div>
								<div class="news_post_content">
									<div class="news_post_date"><a href="#"><?php the_time('F j, Y'); ?></a></div>
									<div class="news_post_title"><a href="<?php the_shortlink(); ?>"><?php the_title(); ?></a></div>
									<div class="news_post_info">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li>by <?php the_author(); ?></li>
										</ul>
									</div>
									<div class="news_post_text">
										<?php the_excerpt(); ?>
									</div>
									<!--							<div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div> -->
								</div>
							</div>
	
							
							<?php endwhile; ?>
							<div class="pagination">
								<?php mdb_pagination(); ?>
							</div>
							
							<?php else: ?>
							
							<p>No posts found. :(</p>
							
							<?php endif; ?>
						</div>
					</div>

					<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
					<!-- Sidebar -->
					<div class="col-lg-4">
						<div class="news_sidebar">
							<ul class="sidebar">
								<?php dynamic_sidebar('main-sidebar' ); ?>
							</ul>
						</div>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>

<?php get_footer(); ?>