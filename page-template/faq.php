<?php /* Template Name: Faq Page */ ?>

<?php get_header(); ?>
  <!--Main container sec start-->
    <div class="main_container">
      <section class="bannerinnr_sec banner_faq clearfix">
          <div class="innerbnr_cap">
            <div class="faq_accord">
              <div class="inner_head">
                <h1>Frequently Asked Questions</h1>
              </div>
              
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <?php $args=array('post_type' => 'wax_faq','posts_per_page' => 50,'post_status' => 'publish','orderby' => 'date', 'order' => 'ASC');
                  $query = new WP_Query($args);
                  $i = 1;
                  while ($query->have_posts()) : $query->the_post();?>
                  
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                          <?php the_title(); ?>
                          <!-- How long should I grow my hair? -->
                          </a>
                        </h4>
                      </div>
                      <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                        <div class="panel-body">
                          <div class="faq_tabcaontent">
                            <p><?php the_content(); ?><!-- The best length for hair to be waxed is 1/2 to 3/2 of an inch long. --></p>
                           </div>
                        </div>
                      </div>
                    </div>
                    <?php $i++; ?>
                  <?php endwhile; ?>
                
              </div>
            </div>
          </div>
      </section>
    </div>
    <!--Main container sec end-->

<?php get_footer(); ?>