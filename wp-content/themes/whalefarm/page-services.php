<?php

/**
* Services Archive Template File
*

* @package WhaleFarm

*/


get_header();

?> 


<!-- This is a custom page for services on which I will fetch all the terms ( like digital marketing, web dev  ) of the services taxonomy -->



<?php 
 
$services_taxonomy_terms = get_terms( array(
    'taxonomy' => 'services',
    'hide_empty' => false,
     'parent' => 0,
) );

$services_taxonomy_terms = array_reverse($services_taxonomy_terms);

// foreach ($terms as $term) {
// 	echo $term->term_id."<br>";
// 	echo get_term_link( $term->term_id, $taxonomy = 'services' ); 
// 	# code...
// }
// print_r($terms);

?>



<section class="banner-area services-banner">
	<div class="container">


		<div class="row banner-text w-100">
			<div class="col-md-4 page-head head-left-div text-md-center">
				<h1 class="page-title pt-4">
				 Services
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>

			<div class="col-md-8 page-excerpt head-right-div text-left">
				<p class="excerpt-txt pl-md-3 text-left">
					Our experienced team takes care of everything. From writing dynamic copy for eye-catching creatives, to analyzing your visitor traffic to drive organic growth, we’ll get your brand in front of the right people. Your job? Just keep creating awesome products and services.
				</p>
			</div>

		</div>


	</div>
</section>

<!-- I will have to run a counter for the below section for making logic of even and odd classes
  -->
  <!-- Also order classes are important for the even and odd enteries -->
<!-- I need to add odd-services-div class for the odd entry, and even-services-div for the even entry -->


<div class="main services-main ">
	<section class="services-listing-section">
		<div class="container">

			<?php $counter = 1; ?>

			<?php foreach($services_taxonomy_terms as $services_taxonomy_term ){ ?>

				<?php  $termId =  $services_taxonomy_term->term_id; ?>

				<?php $term_excerpt =  get_field('taxonomy_excerpt', $services_taxonomy_term->taxonomy.'_'.$termId); ?>

				<?php  $term_featured_img_url = get_field('taxonomy_image', $services_taxonomy_term->taxonomy.'_'.$termId);

				$term_featured_img_url = $term_featured_img_url['url'];

				$term_name = $services_taxonomy_term->name; 


				$term_permalink = get_term_link( $termId, $taxonomy = 'services' );

				  

				 ?>
			<!-- Here I'm making a logic of even and odd divs of services, the odd service will have the data-div on right side while the even service will have the date div on left side  -->

			<div class="row listing-single-service-main py-sm-5 my-5 <?php if($counter%2==1) { echo 'odd-service-div'; }else{ echo 'even-service-div';} ?>">


				<div class="col-md-6 service-ftd-img <?php if($counter%2==0) { echo 'order-md-1'; }else{ echo 'order-md-0';}?>">
					<div class="ftd-img-wrap">
						<div class="img service-img-div">
							<img src="<?php echo $term_featured_img_url ?>" alt="" class="ftd-img img-fluid">
						</div>
					</div>
				</div>

				<div class="col-md-6 service-data-div mb-5  <?php if($counter%2==0) { echo 'order-md-0'; }else{ echo 'order-md-1';}?>">
					<div class="service-data-wrap">
						<h2 class="service-title mb-3">
							<?php echo $term_name; ?>
						</h2>
						<div class="service-cntnt-div">
							<p class="service-txt">
								<?php echo $term_excerpt; ?>
							</p>
						</div>
						<!-- <div class="service-linkt-btn py-3">
							<a href="<?php echo $term_permalink; ?>" class="service-link">Read More</a>
						</div> -->
					</div>
				</div>
				
			</div>


			<?php 

			$counter = $counter+1;
			
			}

			?>
		  





		</div>
	</section>

	<?php echo do_shortcode(' [getintoucsection]');?>


</div>






<?php  

get_footer();