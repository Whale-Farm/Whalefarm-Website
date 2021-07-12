<?php

/**
* Reviews Template File
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
				 Reviews
				</h1>
				 
			</div>

			 

		</div>


	</div>
</section>

<div class="main reviews-page">

	<section class="home-clients-section ">
		<div class="container">
			<div class="row client-sect-content  mb-3">
				<h2 class="client-head mb-4">
					What Our Clients Say 
				</h2>
				<p class="client-para w-75 ">
					We’ve helped over 150 clients grow their brands and reach new sales. These projects include web design, social media marketing, creative planning, and consulting.
				</p>
				
			</div>


			<div class="row clients-slider-main">

				<?php 
				$args = array( 'post_type' => 'client_reviews', 'posts_per_page' => -1 );
				$the_query = new WP_Query( $args ); 
				?> 

				<div class="owl-carousel owl-theme" id="owl-clients-reviews-page">
				 
				 <?php if ( $the_query->have_posts() ) : ?>

				             <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


				              <?php $review_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>



					<div class="item client-single-item-container ">
						<div class="client-single-item-wrap text-center">
							<div class="img-div py-4">
								<img src="<?php echo $review_featured_img_url;?>" alt="" class="client-img">
							</div>
							<div class="client-content-div">
								<div class="client-meta">
									<h3 class="client-name mb-3">
										<?php the_title(); ?>
									</h3>
									<h4 class="client-desig mb-5">
										<?php the_field('reviewer_designation', false, false);?>
									</h4> 
								</div>
								<div class="review-para">
									<p class="review-text">
										<?php  the_content(); ?>
									</p>
								</div>
							</div>
							
						</div>
					</div>


  			
  			<?php endwhile;
  			wp_reset_postdata(); ?>
  			<?php else:  ?>
  			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  			<?php endif; ?>   

 




				</div>


			</div>



	</div>		
</section>


<?php echo do_shortcode(' [getintoucsection]');?>

</div>			



<?php  

get_footer();
