<?php
/**
 * The template for displaying the footer
 */
?>


<!--Footer sec start-->
<footer id="footer" class="footer_sec">
	<div class="container_flued">
    <div class="row">
      <div class="col-sm-10">
        <div class="ftr_nav">
          	
          	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

          <!-- <ul>
            <li><a href="contact.html">CONTACT US </a></li>
            <li><a href="faq.html"> FAQS </a></li>
          </ul> -->
        </div>
      </div>
      <div class="col-sm-2">
        <div class="ftr_nav social text-right">
          <ul>
           <li><a target="_blank" href="https://www.facebook.com/cirewaxcenter"><i class="fa fa-facebook"></i> </a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
	</div>
</footer>
<!--Footer sec end-->
</main>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="js/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="js/bootstrap.min.js"></script>
<script src="js/vegas.min.js"></script>

<script src="js/plugin.js"></script>
<script src="js/custom.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>
