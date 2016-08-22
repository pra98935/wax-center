<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage wox_center
 * @since wox Center 1.0
 */

get_header(); ?>

<div class="main_container">
	<div class="container">
      	<div class="row">
            <div class="col-md-12" style="margin-top:100px">
            <a href="<?php echo home_url(); ?>" class="btn btn-primary">Back To Home</a>				
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'waxcenter' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'waxcenter' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</div>
	</div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>