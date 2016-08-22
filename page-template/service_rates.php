<?php /* Template Name: Service & rates */ ?>

<?php get_header(); ?>

    <!--Main container sec start-->
    <div class="main_container">
    	<section class="bannerinnr_sec banner_service clearfix">
          <div class="innerbnr_cap">
             <div class="service_content">
                
              <?php while ( have_posts() ) : the_post(); ?>


                  <?php the_content(); ?>

              <?php endwhile; ?>

                <!-- <div class="book_main book_her_body">
                  <div class="book_header clearfix">
                    <h4>FEELING GORGEOUS BEGINS HERE</h4>
                    <a class="book_now" href="http://73.196.210.139:5000/onlinebooking/">BOOK NOW</a>
                  </div>
                  <div class="for_body">
                     FOR HER BODY <img src="<?php echo get_template_directory_uri().'/images/lips_icon.png' ?>">
                  </div>
                  <div class="book_servicelist">
                    <ul class="clearfix">
                      <li><a href="" class="checked_highlight"> ARMS (FULL) $38 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (LOWER) $17 </a></li>
                      <li><a href="" class="checked_highlight"> BIKINI (LINE) $33 </a></li>
                      <li><a href="" class="checked_highlight"> LEGS (UPPER) $38 </a></li>
                      <li><a href="" class="checked_highlight"> ARMS (HALF) $32 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (MID) $22 </a></li>
                      <li><a href="" class="checked_highlight"> CHEST (FULL) $28 </a></li>
                      <li><a href="" class="checked_highlight"> LEGS (FULL) $68 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (UPPER) $22 </a></li>
                      <li><a href="" class="checked_highlight"> BIKINI (BRAZILIAN) $47 </a></li>
                      <li><a href="" class="checked_highlight"> CHEST (STRIP) $19 </a></li>
                      <li><a href="" class="checked_highlight"> LEGS (LOWER) $36 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (FULL) $58 </a></li>
                      <li><a href="" class="checked_highlight"> BIKINI (FULL) $40 </a></li>
                      <li><a href="" class="checked_highlight"> HANDS $12 </a></li>
                      <li><a href="" class="checked_highlight"> SHOULDERS $22 </a></li>
                      <li><a href="" class="checked_highlight"> STOMACH STRIP $12 </a></li>
                      <li><a href="" class="checked_highlight"> TOES $12 </a></li>
                      <li><a href="" class="checked_highlight"> UNDERARMS $18 </a></li>
                      <li><a href="" class="checked_highlight"> BUTTOCKS $25 </a></li>
                      <li><a href="" class="checked_highlight"> STOMACH (FULL) $28 </a></li>
                    </ul>
                  </div>
                  
                  <div class="for_body">
                     FOR HER FACE <img src="<?php echo get_template_directory_uri().'/images/body_icon.png' ?>">
                  </div>
                  <div class="book_servicelist">
                    <ul class="clearfix">
                      <li><a href="" class="checked_highlight"> EYEBROWS $18 </a></li>
                      <li><a href="" class="checked_highlight"> EARS $12 </a></li>
                      <li><a href="" class="checked_highlight"> LIP  $10 </a></li>
                      <li><a href="" class="checked_highlight"> NOSE $12 </a></li>
                      <li><a href="" class="checked_highlight"> CHEEKS $12 </a></li>
                      <li><a href="" class="checked_highlight"> FULL FACE $48 </a></li>
                      <li><a href="" class="checked_highlight"> NECK $12 </a></li>
                      <li><a href="" class="checked_highlight"> SIDEBURNS $10 </a></li>
                      <li><a href="" class="checked_highlight"> CHIN $10 </a></li>
                    </ul>
                  </div>
                </div>
                
                <div class="book_main book_his_body">
                  <div class="book_header clearfix">
                    <h4>FEELING Handsome BEGINS HERE</h4>
                    <a class="book_now" href="http://73.196.210.139:5000/onlinebooking/">BOOK NOW</a>
                  </div>
                  <div class="for_body">
                     FOR HER BODY <img src="<?php echo get_template_directory_uri().'/images/lips_icon.png' ?>">
                  </div>
                  <div class="book_servicelist">
                    <ul class="clearfix">
                      <li><a href="" class="checked_highlight"> ARMS (FULL) $38 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (LOWER) $22 </a></li>
                      <li><a href="" class="checked_highlight"> LEGS (UPPER) $38</a></li>
                      <li><a href="" class="checked_highlight"> ARMS (HALF) $30</a></li>
                      <li><a href="" class="checked_highlight"> BACK (MID) $18 </a></li>
                      <li><a href="" class="checked_highlight"> CHEST (FULL) $28 </a></li>
                      <li><a href="" class="checked_highlight"> LEGS (FULL) $68 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (UPPER) $20 </a></li>
                      <li><a href="" class="checked_highlight"> CHEST (STRIP) $18 </a></li>
                      <li><a href="" class="checked_highlight"> LEGS (LOWER) $34 </a></li>
                      <li><a href="" class="checked_highlight"> BACK (FULL) $58 </a></li>
                      <li><a href="" class="checked_highlight"> HANDS $12 </a></li>
                      <li><a href="" class="checked_highlight"> SHOULDERS $22 </a></li>
                      <li><a href="" class="checked_highlight"> STOMACH STRIP $12 </a></li>
                      <li><a href="" class="checked_highlight"> STOMACH (FULL) $28 </a></li>
                      <li><a href="" class="checked_highlight"> TOES $12 </a></li>
                      <li><a href="" class="checked_highlight"> UNDERARMS $18 </a></li>
                    </ul>
                  </div>
                  
                  <div class="for_body">
                     FOR HER FACE <img src="<?php echo get_template_directory_uri().'/images/body_icon.png' ?>">
                  </div>
                  <div class="book_servicelist">
                    <ul class="clearfix">
                      <li><a href="" class="checked_highlight"> EYEBROWS $18 </a></li>
                      <li><a href="" class="checked_highlight"> EARS $12 </a></li>
                      <li><a href="" class="checked_highlight"> LIP  $10</a></li>
                      <li><a href="" class="checked_highlight"> NOSE $12 </a></li>
                      <li><a href="" class="checked_highlight"> CHEEKS $12 </a></li>
                      <li><a href="" class="checked_highlight"> FULL FACE $48 </a></li>
                      <li><a href="" class="checked_highlight"> NECK $12 </a></li>
                      <li><a href="" class="checked_highlight"> SIDEBURNS $10 </a></li>
                      <li><a href="" class="checked_highlight"> CHIN $10 </a></li>
                    </ul>
                  </div>
                </div> -->





             </div>
          </div>
      </section>
    </div>
    <!--Main container sec end-->

<?php get_footer(); ?>