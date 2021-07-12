<?php

/**
* Main Template File
*

* @package WhaleFarm

*/


get_header();

?> 
<div class="main home-main">


	<section class="home-banner-sect">
		<div class="container">
			<div class="row main-heads-div">


				<?php the_field('home_banner_section', false, false);?>

				<!-- we have used double false in the parameter to avoid the extra paras added by the acf automatically -->


				<!-- I have made a custom field for this content in the admin panel home page.

				  -->
				<!-- <div class="col-12 heads-text mt-sm-5 pt-sm-5 pt-2">
					<h2 class="head-title first-title mt-5 ">
						You make things<span class="head-dot">.</span>
					</h2>
					<h2 class="head-title second-title">
						We sell them<span class="head-dot">.</span>
					</h2>
					<h3 class="head-sub-heading mt-4">
						Its that simple.
					</h3>

				</div>
				<div class="col-12 learnmore-div mt-4 mb-sm-5">
					<a href="#" class="learn-more-head-btn"> Learn more</a>
				</div>
				<div class="col-12 heads-para-icon mt-4">
					<div class="head-para-icon-inner float-right">
					<p class="head-p-text ">
						Lorem Ipsum is simply dummy text of the printing and 
						typesetting industry. Lorem Ipsum has been the 
						industry's standard dummy text ever since the 1500s,
					</p>
					</div>
				</div> -->
				 
				
			</div>
		</div>
	</section>

	 
	 <section class="home-banner-slider-sect">
	 	<div class="container-fluid p-0">

	 		<?php 
				$args = array( 'post_type' => 'home_work_slider', 'posts_per_page' => -1 );
				$the_query = new WP_Query( $args ); 
				?> 


	 		<div class="owl-carousel owl-theme home-banner-carousal">
	 			

				<?php if ( $the_query->have_posts() ) : ?>

					            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


					             <?php $banner_img_url = get_the_post_thumbnail_url($post->ID); ?>


	 			<div class="home-banner-item">
	 				<img src="<?php echo $banner_img_url;?>" alt="" class="img-fluid">
	 				<div class="banner-work-content-div">	
	 						<h3 class="banner-work-category">	
	 								Web Design, Web Development, Branding
	 						</h3>
	 							

	 						<h2 class="banner-work-title">
	 						<?php the_title(); ?>
	 						</h2>	
	 							
	 						<p class="banner-work-desc mb-4">	
	 								<?php  the_content(); ?>	
	 						</p>	
	 						<div class="banner-view-more">	
	 								<a href="<?php echo site_url();?>/works" class="banner-view-more-txt">
	 									View Work
	 								</a>
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
	 </section> 


	<section class="capabilities-sect pt-5 pb-4 mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 capabilities-head pb-4 pl-4">
					<h2 class="capa-head-text pl-2">Capabilities</h2>
					
				</div>
			</div>

			<?php 

			// Here we need to show all the services, so I have made pages for all the services and assigned them a category named "Service Pages" So here we will fetch the title and content of those pages

			// ID of services pages category is 19
			$args = array(
			  'post_type' => 'page' ,
			  'orderby' => 'date' ,
			  'order' => 'ASC' ,
			  'cat' => '19'
			  // 19 is the ID of services pages category
			);

			$the_query = new WP_Query($args);
			  


			?>    

			<div class="row capabilities-items-main">
						<?php if ($the_query->have_posts()) : ?>
				            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?> 

				<div class="col-md-4 cap-item-main">
					<div class="cap-item-wrap">
						<div class="cap-item-head">
							<a href="<?php echo the_permalink();?>" class="item-head-anch">
							<h3 class="cap-item-head-text my-3">
								<?php the_title(); ?>
							</h3>
							</a>
							<p class="cap-item-desc">
								   <?php echo wp_trim_words(get_the_excerpt(),20); ?> 

							</p>
						</div>
						<div class="cap-view-more my-4">
							<a href="<?php echo the_permalink();?>" class="cap-view-more-text"> View More</a>
						</div>
					</div>
				</div>

				    <?php endwhile; ?>
				    <?php wp_reset_postdata(); ?>

				<?php else : ?>
				    <p><?php __('No Capabilities Found'); ?></p>
				<?php endif; ?>

				 

	 

			</div>
		</div>
	</section>


	<section class="trusted-sect py-4">
		<div class="container">
			<div class="row trusted-head-row mb-3">
				<h2 class="trusted-head">
					Trusted By
				</h2>
			</div>
			<div class="row trusted-img-row text-center  animated grow  duration2 eds-on-scroll ">
				<img src="<?php echo get_template_directory_uri();?>/images/trusted.svg" alt="" class="img-fluid d-none d-md-block"><br>
				<img src="<?php echo get_template_directory_uri();?>/images/trusted-1.jpg" alt="" class="img-fluid pl-2 mb-2 d-md-none  "><br>
				<img src="<?php echo get_template_directory_uri();?>/images/trusted-2.jpg" alt="" class="img-fluid d-md-none  ">
			</div>
		</div>
	</section>

	<section class="our-mission-sect ">
		<div class="container">
			<div class="row our-mission-text-div">



				<div class="col-12 mission-text-sect">


					<?php the_field('home_our_mission_upper_text_section', false, false);?>

					<!-- I have used custom field of home mission upper text section for this -->



					<!-- <h3 class="upper-sub-head mt-4 mb-sm-5">
						Our Mission
					</h3>
					<h2 class="mission-mainhead mt-sm-5 pt-4 pb-2">
						Is Sustainable Growth<span class="mission-dot">.</span> 
					</h2>
					<h3 class="lower-sub-head mb-4">
						What Grow-able Brands Do:
					</h3>
					<p class="mission-para">
						Do these well, and everything else will follow.  This has been true for client brands, and it has been true for Whale Farm itself.  As a result, nearly 100% of our business comes through referrals.
					</p>
					<br class="mission-br">
					<p class="mission-para">
						We’re selective with who we work with. First, we select brands who meet the criteria above. Next, we make sure growth is actually possible, because (unlike a conventional agency), our product is not a specific service but the increase in sales itself.

					</p> -->


				</div>
				
			</div>



			<div class="row mission-divs mb-4">


				<?php the_field('home_our_mission_icons_section', false, false);?>


				<!-- I have used a custom field of our mission icons section for this -->





				<!-- <div class="col-12 mission-divs-small-para">
					<p class="whale-para">Here is what we mean by that:</p>
				</div>



				<div class="col-md-4 mission-div-main text-center mt-sm-5 py-5 px-3">
					<div class="mission-div-wrap mt-4">
						<div class="mission-icon">
							<img src="<?php echo get_template_directory_uri();?>/images/contract.png" alt="" class="mission-img img-normal">
							<img src="<?php echo get_template_directory_uri();?>/images/contract-hover.png" alt="" class="mission-img img-hovr">
						</div>
						<div class="mission-meta-content">
							<h3 class="mission-div-head pt-5 pb-3">
								No Long Term Contracts
							</h3>
							<p class="mission-para">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aut ea, possimus ducimus eos similique.
							</p>
						</div>
					</div>
				</div>


				<div class="col-md-4 mission-div-main text-center mt-sm-5 py-5 px-3 active">
					<div class="mission-div-wrap mt-4">
						<div class="mission-icon">
							<img src="<?php echo get_template_directory_uri();?>/images/performance.png" alt="" class="mission-img img-normal">
							<img src="<?php echo get_template_directory_uri();?>/images/performance-hover.png" alt="" class="mission-img img-hovr">
						</div>
						<div class="mission-meta-content">
							<h3 class="mission-div-head pt-5 pb-3">
								Performance-Based
							</h3>
							<p class="mission-para">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aut ea, possimus ducimus eos similique.
							</p>
						</div>
					</div>
				</div>



				<div class="col-md-4 mission-div-main text-center mt-sm-5 py-5 px-3">
					<div class="mission-div-wrap mt-4">
						<div class="mission-icon">
							<img src="<?php echo get_template_directory_uri();?>/images/account.png" alt="" class="mission-img img-normal">
							<img src="<?php echo get_template_directory_uri();?>/images/account-hover.png" alt="" class="mission-img img-hovr">
						</div>
						<div class="mission-meta-content">
							<h3 class="mission-div-head pt-5 pb-3">
								Real Account Manager
							</h3>
							<p class="mission-para">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aut ea, possimus ducimus eos similique.
							</p>
						</div>
					</div>
				</div>




			</div>
			<div class="row mission-bottom-para my-5">
				<div class="col-12 bottom-para-main">
					<p class="mission-bottom-p-text">
						Once you’ve been approved to work with Whale Farm, everything on your side is designed to be a simple as possible. We work on commission, essentially; initial terms are month-to-month; and you always have access to a dedicated account manager.
					</p>
				</div>
			</div> -->



		</div>
	</section>



	


	<section class="home-clients-section ">
		<div class="container">
			<div class="row client-sect-content  mb-3">
				<h2 class="client-head mb-4">
					What others are saying about Whale Farm
				</h2>
				<!-- <p class="client-para w-75  animated slideInUp  duration2 eds-on-scroll  ">
					We’ve helped over 150 clients grow their brands and reach new sales. These projects include web design, social media marketing, creative planning, and consulting.
				</p> -->
				
			</div>


			<div class="row clients-slider-main">


				<?php 
				$args = array( 'post_type' => 'client_reviews', 'posts_per_page' => -1 );
				$the_query = new WP_Query( $args ); 
				?> 


				<div class="owl-carousel owl-theme" id="owl-clients">

					<?php if ( $the_query->have_posts() ) : ?>

					            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


					             <?php $review_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>
				 

					<!-- I have used a custom post type for this reviews portion, the name of custom post type is client_review -->

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

 
	<!-- <section class="home-contact-form-sect">
		<div class="container">
			<div class="row home-contact-head ">


				<div class="col-12 cntct-head-text">
					<h3 class="head-txt pb-3">
						Get In Touch
					</h3>
					<div class="cntct-phone-div">
				    <i class="fa fa-phone"></i>
					<a href="" class="cntct-phone ml-2">
					(801) 449-1370	

					</a>
				</div>

				</div>

				<div class="col-12 whale-contact-form mt-sm-5 pt-5">
					<form>

					<?php echo do_shortcode('[contact-form-7 id="40" title="Get In Tocuh Form"]' );?> -->	


						  <!--  <div class="form-row">
						      <div class="form-group col-md-4">
						         <label for="fname" class="p-0 m-0"> Name* </label>
						         [text* getName id:cntctFName class:form-control] 
						      </div>
						      <div class="form-group col-md-4">
						         <label for="email" class="p-0 m-0">Email*</label>
						         [email*  getEmail id:cntctEmail class:form-control]  
						      </div>
						      <div class="form-group col-md-4">
						         <label for="lname" class="p-0 m-0"> Subject </label>
						          [text  getSubj id:cntctSubj class:form-control] 
						      </div>
						   </div> 
						   <div class="form-group">
						      <label for="help" class="p-0 m-0">Message</label>
						      [textarea getHelp id:cntctHelp class:form-control rows:5] 
						   </div>
						   <button type="submit" class="btn whale-form-submit-btn mt-lg-5">
						   Send Message
							</button> -->


					  <!--  <div class="form-row">
					      <div class="form-group col-md-4">
					         <label for="fname" class="p-0 m-0"> Name* </label>
					         <input type="text" class="form-control" id="cntctFName" >
					      </div>
					      <div class="form-group col-md-4">
					         <label for="email" class="p-0 m-0">Email*</label>
					         <input type="email" class="form-control" id="cntctEmail" > 
					      </div>
					      <div class="form-group col-md-4">
					         <label for="lname" class="p-0 m-0"> Subject </label>
					         <input type="text" class="form-control" id="cntctSubj" >
					      </div>
					   </div> 
					   <div class="form-group">
					      <label for="help" class="p-0 m-0">Message</label>
					      <textarea class="form-control" id="cntctHelp" rows="5"  > </textarea>
					   </div>
					   <button type="submit" class="btn whale-form-submit-btn mt-lg-5">
					   Send Message
						</button> -->


<!-- 
					</form>
					
				</div>



				
			</div> 



		</div>
		
	</section> -->


</div>		




<?php  

get_footer();