<?php

/**
* Works Archive Template File
*

* @package WhaleFarm

*/


get_header();

?> 

 
  <section class="banner-area page-banner-area">
 	<div class="container">


 		<div class="row banner-text ">
 			<div class="col-12 page-head-div text-md-center">
 				<h1 class="page-title pt-4">
 				 Our Work
 				</h1>
 				<!-- <p class="title-desc">
 					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
 			</p> -->
 			</div>

 			 

 		</div>


 	</div>
 </section>


 <div class="main works-page">

 	<section class="services-related-section work-section">
 				<div class="container">
 					<div class="row work-head-div related-section-head-div mb-5">
 						<div class="col-12 work-head-wrap related-head-wrap">
 							<h2 class="related-head-text">
 								
 								Our Work for Digital Marketing, Web Designing & Developments

 							</h2>
 							<p class="work-head-para">
 								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, temporibus. Animi provident neque repellendus odit iure facilis adipisci nesciunt optio!
 							</p>
 						</div>
 						
 					</div>


 					<?php 
 					 $args = array( 'post_type' => 'works', 'posts_per_page' => -1 );
 					 $the_query = new WP_Query( $args ); 
 					 ?> 

 					<div class="row related-content-main-div">


 						<?php if ( $the_query->have_posts() ) : ?>

 						   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 						   	<?php $work_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>
 						



 						<div class="col-md-3 related-single-div-main mb-4">
 							<div class="related-single-div-wrap content">
 								<a href="<?php echo $work_featured_img_url;?>" class="related-single-anch" data-lightbox="work"  >

 									<div class="related-content-overlay content-overlay"></div>


 									<img class="related-ftd-img content-image img-fluid" src="<?php echo $work_featured_img_url;?>">

 									<div class="related-single-content-div-content content-details fadeIn-bottom">
 									  <!-- <h3 class="rel-title content-title">Ads Marketing</h3> -->
 									  <p class="rel-text content-text">
 									 <?php  echo wp_trim_words( get_the_content(), 15 ); ?> 
 										</p>
 									
 									</div>



 								</a>	
 							</div>
 						</div>


 						 
 						<?php endwhile;
 						wp_reset_postdata(); ?>
 						<?php else:  ?>
 						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 						<?php endif; ?>

 						 


 						 
 

 						
 						
 					</div>


 					



 				</div>
 			</section>


 			<?php echo do_shortcode(' [getintoucsection]');?>
 

 </div>	




<?php  

get_footer();