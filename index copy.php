<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
		<div class="news" style="padding-top: 0;">
			<div class="container">
				<div class="row row-eq-height">
					<div class="col-lg-8">
						<div class="about_text">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
							<h3><?php the_title(); ?></h3>
							
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
							<?php edit_post_link(); ?>
							
							<?php endwhile; ?>
							
							<?php mdb_pagination(); ?>
							
							<?php else: ?>
							
							<p>No posts found. :(</p>
							
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>