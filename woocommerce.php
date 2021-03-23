<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
		<div class="about" style="padding-top: 0;">
			<div class="container">
				<div class="row row-eq-height">
					<div class="col">
						<div class="about_text">
							<?php woocommerce_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<?php get_footer(); ?>