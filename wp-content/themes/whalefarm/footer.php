     <?php


/**

*
* Footer Template
*
* @package Whalefarm

*/

?>




<footer  class="footer-div whale-footer  animated zoomIn delay2 duration2 eds-on-scroll ">
	<div class="container">
		<div class="row mobile-top-logo d-md-none  mb-3">
			<div class="col footer-link-div  footer-logo text-center">
				<a href="<?php echo site_url(); ?>" class="footer-link"> 

					<img src="<?php echo get_template_directory_uri();?>/images/logo-footer.svg" alt="" class="footer-logo-img">

				</a>
				
			</div>
			
		</div>
		<div class="row footer-menu-div ">
			<div class="col footer-link-div">
				<a href="<?php echo get_site_url(); ?>" class="footer-link">Home</a>
				
			</div>
			<div class="col footer-link-div">
				<a href="<?php echo get_site_url(); ?>/works" class="footer-link">Work</a>
				
			</div>

			<div class="col footer-link-div  footer-logo d-md-block d-none">
				<a href="<?php echo get_site_url(); ?>" class="footer-link"> 

					<img src="<?php echo get_template_directory_uri();?>/images/logo-footer.svg" alt="" class="footer-logo-img">

				</a>
				
			</div>

			<!-- <div class="col footer-link-div">
				<a href="<?php echo get_site_url(); ?>/category/blog" class="footer-link">Blog</a>
				
			</div> -->

			<div class="col footer-link-div">
				<a href="<?php echo get_site_url(); ?>/reviews" class="footer-link">Reviews</a>
				
			</div>

			<div class="col footer-link-div">
				<a href="<?php echo get_site_url(); ?>/contact" class="footer-link">Contact</a>
				
			</div>


			
		</div> 



		<div class="row footer-social-links-div mt-5">
			<a href="https://www.facebook.com/whalefarmco" target="_blank" class="social-link-anch"><i class="fa fa-facebook-f"></i></a> 
			<a href="https://www.linkedin.com/company/18855000" target="_blank" class="social-link-anch"><i class="fa fa-linkedin"></i></a>
			<a href="https://www.instagram.com/whalefarmco/" target="_blank" class="social-link-anch"><i class="fa fa-instagram"></i></a>
			
		</div>

		<div class="row footer-copyright-div mt-5 text-center">
			<div class="col-12 copyright-text">
				<p class="text-copyright">
					&copy; 2021 Whale Farm. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>

</footer>	


 <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.5.slim.min.js"  ></script> 
 <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"  ></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"  ></script> 

 <!-- ==== Carousal  -->
 <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/js/custom-js.js"></script> 

 <!-- Lightbox -->
 <script src="<?php echo get_template_directory_uri();?>/js/lightbox.js"></script> 

 <!-- For case study chart  -->
 <script src="<?php echo get_template_directory_uri();?>/js/jquery.appear.min.js"></script>
 <script src="<?php echo get_template_directory_uri();?>/js/jquery.easypiechart.min.js"></script> 
 
<?php wp_footer(); ?>
</body>
</html>  