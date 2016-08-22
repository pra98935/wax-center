<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="main_container">
	<div class="container">
      	<div class="row" style="margin: 100px 0 60px 0;">
            <div class="col-md-9">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="inner_title_single">', '</h1>' ); ?>
						</header><!-- .entry-header -->

						<?php the_content(); ?>

						<?php the_post_thumbnail(); ?>

						<div class="entry-content">
							<?php
								the_content();

								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'waxcenter' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'waxcenter' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								) );

								if ( '' !== get_the_author_meta( 'description' ) ) {
									get_template_part( 'template-parts/biography' );
								}
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php //waxcenter_entry_meta(); ?>
							<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'waxcenter' ),
										get_the_title()
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

				<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

					if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'waxcenter' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'waxcenter' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'waxcenter' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'waxcenter' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'waxcenter' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}

					// End of the loop.
				endwhile;
				?>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>