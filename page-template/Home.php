<?php 
/* Template Name: Home Page */
get_header();

// Slider start
$args=array('post_type' => 'slider','post_status' => 'publish','orderby' => 'date', 'order' => 'ASC');

$query = new WP_Query($args);
if( $query->have_posts() ) { ?>

  <!--Main container sec start-->
    <div class="main_container">
    	<section class="mainslider_sec">
          <div class="banner_cap">
            <h1> SMOOTH. <span>Beautiful.</span> Skin. </h1>
            <a href="http://50.248.154.226:5000/ONLINEBOOKING/" target="_blank">Make an appointment</a>
          </div>
      </section>
    </div>
  <!--Main container sec end-->

   <!--vegas slider js start-->
 
<script>
  $(function() {
      $('body').vegas({
          slides: [
              
              <?php while ($query->have_posts()) : $query->the_post();?>

                { src: '<?php the_post_thumbnail_url(); ?>' },

              <?php endwhile; ?>

          ]
      });
  });
</script>

<!--vegas slider js end-->

<?php 
  }
  
  wp_reset_query();  // Restore global post data stomped by the_post(). 

get_footer(); ?>