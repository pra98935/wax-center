<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage wox_center
 * @since wox Center 1.0
 */

get_header(); ?>

<!--Main container sec start-->
<div class="main_container">
	<div class="container">
      	<div class="row">
            <div class="col-md-12" style="margin-top:100px">
			<?php while ( have_posts() ) : the_post();

				// Include the page content template.
				//get_template_part( 'template-parts/content', 'page' );

				the_title('<h1 class="inner_title">','</h1>'); ?>

				
				<div class="inner_content"><?php echo the_content(); ?></div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>
			</div>
		</div>
	</div>
</div><!-- .main_content -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
