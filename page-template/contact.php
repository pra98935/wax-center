<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>


    <!--Main container sec start-->
    <div class="main_container">
    	<section class="bannerinnr_sec banner_contact clearfix">
          <div class="innerbnr_cap contact_inner">
              <div class="contact_main">
                <div class="contact_form">
                  <h1><?php the_title(); ?></h1>
                  <p>Love to leave a compliment? Got a waxing question? Get in touch</p>
                 
                  <?php echo do_shortcode('[contact-form-7 id="31" title="contact Page Form"]');?>

                  <!-- <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="" placeholder="First Name">
                    </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="">Who would you like to contact?</label>
                    <select class="form-control">
                      <option>- Select -</option>
                      <option>Select-1</option>
                      <option>Select-2</option>
                      <option>Select-3</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="">What is this regarding?</label>
                    <select class="form-control">
                      <option>- Select -</option>
                      <option>Select-1</option>
                      <option>Select-2</option>
                      <option>Select-3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="" placeholder="Message"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-default">Send</button>
                </form> -->
                
               </div>
               <div class="contact_right">
                 <!-- <p>409 US-206, Hillsborough, <br>NJ 08844</p>
                 <p>Phone: 908.829.4343</p> -->
                 
                <?php
                  // Start the loop.
                  while ( have_posts() ) : the_post();

                    // Include the page content template.
                    the_content();

                    // End of the loop.
                  endwhile;
                  ?>

                 <div class="contact_logo">
                   <a href="#"><img src="<?php echo get_template_directory_uri().'/images/logo_full.png' ?>" class="img-responsive"></a>
                 </div>
               </div>
               <div class="clearfix"></div>
             </div>
          </div>
      </section>
    </div>
    <!--Main container sec end-->
<?php get_footer(); ?>