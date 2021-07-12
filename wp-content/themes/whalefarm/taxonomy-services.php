<?php

/**
* Services Archive Template File
*

* @package WhaleFarm

*/


get_header();

?> 


<!-- This is a custom page for the terms of services taxonomy like digital marketing etc -->







<?php 
 


 if (is_tax() || is_category() || is_tag() ) {

  $qobj = get_queried_object();
  $current_term_id = $qobj->term_id;
  $current_term_taxonomy = $qobj->taxonomy;
    // var_dump($qobj); // debugging only
  // echo $qobj->name;

 }
 

?>


 <div class="main services-category-main ">


 	<!-- I have placed all the content of this in to taxonomy edit page which has a custom field -->

 	<!-- We have used the 2 false parameters to avoid the additoin of extra paras -->

 	<?php echo $taxonomy_content = get_field('taxonomy_content', $current_term_taxonomy.'_'.$current_term_id, false, false);?>


 	<!-- <section class="category-content-section-main">
 		<div class="container">


 			<div class="row service-cat-upper-div">
 				<div class="col-12 service-cat-title-div mb-4">
 					<h1 class="service-cat-title">
 						Digital <br class="whale-br">
 						Marketing<span class="whale-dot">.</span>
 					</h1>
 				</div>
 				<div class="col-12 service-cat-content-div">
 					<p class="service-para">
 						Do tIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letter .
 						<br class="whale-br">
 						<br class="whale-br">

 						it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
 					</p>
 				</div>
 			</div>


 			<div class="row service-cat-icons-div my-md-5 py-5">



 				<div class="col-md-3 services-cat-single-service-main">
 					<div class="service-cat-single-service-wrap text-center">
 						<div class="cat-service-img-div">
 							<img src="images/paid-social.png" alt="" class="img-fluid service-img">
 						</div>
 						<div class="cat-service-title-div mt-md-5 mt-3 mb-5 mb-md-0">
 							<a href="#" class="cat-service-title-anch"> 
 							<h2 class="cat-service-title">
 								Paid Social
 							</h2>
 							</a>
 						</div>
 					</div>
 				</div>



 				<div class="col-md-3 services-cat-single-service-main">
 					<div class="service-cat-single-service-wrap text-center">
 						<div class="cat-service-img-div">
 							<img src="images/paid-search.png" alt="" class="img-fluid service-img">
 						</div>
 						<div class="cat-service-title-div mt-md-5 mt-3 mb-5 mb-md-0">
 							<a href="#" class="cat-service-title-anch"> 
 							<h2 class="cat-service-title">
 								Paid Search
 							</h2>
 							</a>
 						</div>
 					</div>
 				</div>


 				<div class="col-md-3 services-cat-single-service-main">
 					<div class="service-cat-single-service-wrap text-center">
 						<div class="cat-service-img-div">
 							<img src="images/email.png" alt="" class="img-fluid service-img">
 						</div>
 						<div class="cat-service-title-div mt-md-5 mt-3 mb-5 mb-md-0">
 							<a href="#" class="cat-service-title-anch"> 
 							<h2 class="cat-service-title">
 								Email
 							</h2>
 							</a>
 						</div>
 					</div>
 				</div>


 				<div class="col-md-3 services-cat-single-service-main">
 					<div class="service-cat-single-service-wrap text-center">
 						<div class="cat-service-img-div">
 							<img src="images/local-ads.png" alt="" class="img-fluid service-img">
 						</div>
 						<div class="cat-service-title-div mt-md-5 mt-3 mb-5 mb-md-0">
 							<a href="#" class="cat-service-title-anch"> 
 							<h2 class="cat-service-title">
 								Local Ads
 							</h2>
 							</a>
 						</div>
 					</div>
 				</div>




 				
 			</div>

 			 <div class="row services-cat-small-bottom-para">
 				<div class="col-12 para-text-div">
 					<p class="service-cat-small-para-txt">
 						It look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
 					</p>
 				</div>
 			</div>	
 		</div>
 	</section> -->

 <section class="services-related-section">
 	<div class="container">
 		<div class="row related-section-head-div mb-4">
 			<div class="col-12 related-head-wrap">
 				<h2 class="related-head-text">


<!-- I have made a custom field for this title because it needed to be in 2 lines, its code is present on texonomy edit page with the label : Taxonomy Related Title Code  -->

 					<?php echo $taxonomy_related_title  = get_field('taxonomy_related_title_code', $current_term_taxonomy.'_'.$current_term_id, false, false);?>
 					<!-- Related Digital <br class="whale-br">
 					Marketing Projects -->
 				</h2>
 			</div>
 			
 		</div>

 		<!-- Here we need to fetch the projects according the term, for example the current term is  -->
 		<!-- Digital Marketing, so we need to fetch the projects of digital marketing -->
 		<!-- We will fetch the work posts with the taxonomy services and term with current id -->

 		<?php 
 		 $args = array( 'post_type' => 'works', 'posts_per_page' => -1 ,'tax_query' => array(
            array(
                'taxonomy' => 'services',
                'field' => 'term_id',
                'terms' => $current_term_id,
            )
        ));

 		 $the_query = new WP_Query( $args ); 
 		 
 		 ?> 


 		<div class="row related-content-main-div">

 			<?php if ( $the_query->have_posts() ) : ?>

 			   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 			   	<?php $work_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>


 			<div class="col-md-3 related-single-div-main">

 				<div class="related-single-div-wrap content">

 					<a href="<?php echo $work_featured_img_url;?>" class="related-single-anch" data-lightbox="related">

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


 			 

 				<div class="row more-work-btn w-100 d-block mt-5">	
 						<div class="col-12 more-work-btn-wrap p-0 ml-0">	

 							<a href="<?php echo site_url();?>/works" class="more-work-anch float-right">
 								More Work
 							</a>

 						</div>
 				</div>	

 			
 			
 		</div>


 		



 	</div>
 </section>


 <?php echo do_shortcode(' [getintoucsection]');?>
	
</div>


<?php  

get_footer();