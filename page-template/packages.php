<?php /* Template Name: Packages page */

get_header();
global $post;
?>

    <!--Main container sec start-->
    <div class="main_container">
    	<section class="bannerinnr_sec banner_package clearfix">
          <div class="innerbnr_cap bnrpackag_in">

              <div class="packages_list">
                <ul>
                  
                  <?php $args=array('post_type' => 'wax_packages','posts_per_page' => 50,'post_status' => 'publish','orderby' => 'date', 'order' => 'ASC');
                    $query = new WP_Query($args);
                    $i = 1;
                    while ($query->have_posts()) : $query->the_post();?>

                        <?php if ($post->ID == '80') { ?>
                            <li>
                                <span class="list_style1"></span>
                                <div class="pakglist_cotntent1">
                                  <h3><?php the_title(); ?></h3>
                                  <p></p>
                                </div>
                                <div class="book_today1">
                                  <div class="booking_price1"></div>
                                  <?php $packages_link = get_post_meta($post->ID , 'packages_link' , true); ?>
                                  <a target="_blank" href="<?php echo $packages_link; ?>">Click Here</a>
                                </div>
                            </li>
                        <?php } else { ?>

                        <li>
                            <span class="list_style"><?php echo $i; ?></span>
                            <div class="pakglist_cotntent">
                              <h4><?php the_title(); ?></h4>
                              <p><?php the_content(); ?></p>
                            </div>
                            <div class="book_today">
                              <div class="booking_price"></div>
                              <?php $packages_link = get_post_meta($post->ID , 'packages_link' , true); ?>
                              <a target="_blank" href="<?php echo $packages_link; ?>">Book Today</a>
                            </div>
                        </li>

                    <?php } $i++; ?>
                    <?php endwhile; ?>

                </ul>
              </div>

          </div>
      </section>
    </div>
    <!--Main container sec end-->
    
<?php get_footer(); ?>