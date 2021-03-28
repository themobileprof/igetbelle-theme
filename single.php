<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
		<div class="news">
			<div class="container">
				<div class="row">

					<!-- News Posts -->
					<div class="col-lg-8">
						<div class="news_posts">

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<!-- News Post -->
							<div class="news_post">
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<div class="news_post_image embed-responsive embed-responsive-21by9">
									<?php the_post_thumbnail('my-custom-image-size'); ?>
								</div>
								<?php endif; ?>
								<div class="news_post_content">
									<div class="news_post_title">
										<?php the_title(); ?>
									</div>
									<div class="news_post_info">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li><small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></li>
										</ul>
									</div>
									<div class="news_post_text">
										<?php get_template_part( 'content', get_post_format() ); ?>
										<?php
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;
										?>
									</div>
									<!--							<div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div> -->
								</div>
							</div>
	
							<div class="pagination">
								<?php previous_post_link(); ?> |  <?php next_post_link(); ?>
							</div>
							<?php endwhile; ?>
							
							
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