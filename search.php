<?php
/**
 * The template for displaying search results pages
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

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'waxcenter' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'content', 'search' );

					// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'waxcenter' ),
						'next_text'          => __( 'Next page', 'waxcenter' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'waxcenter' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div>
</div>





<?php //get_sidebar(); ?>
<?php get_footer(); ?>
