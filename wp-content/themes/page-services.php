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
 $terma = get_queried_object();

 print_r($terma);
$services_taxonomy_terms = get_terms( array(
    'taxonomy' => 'services',
    'hide_empty' => false,
) );

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
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

			<?php foreach($services_taxonomy_terms as $services_taxonomy_term ){ ?>

				<?php  echo $termId =  $services_taxonomy_term->term_id; ?>

				<?php echo the_field('taxonomy_excerpt', $termId); ?>

				<?php  $term_featured_img_url = the_field('taxonomy_image', $termId);

				  print_r($term_featured_img_url);

				 ?>
			<!-- Here I'm making a logic of even and odd divs of services, the odd service will have the data-div on right side while the even service will have the date div on left side  -->

			<div class="row listing-single-service-main py-sm-5 my-5 odd-service-div">
				<div class="col-md-6 service-ftd-img order-md-0">
					<div class="ftd-img-wrap">
						<div class="img service-img-div">
							<img src="<?php echo get_template_directory_uri();?>/images/digital-marketing.png" alt="" class="ftd-img img-fluid">
						</div>
					</div>
				</div>

				<div class="col-md-6 service-data-div mb-5 order-md-1">
					<div class="service-data-wrap">
						<h2 class="service-title mb-3">
							Digital Marketing
						</h2>
						<div class="service-cntnt-div">
							<p class="service-txt">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
						<div class="service-linkt-btn py-3">
							<a href="#" class="service-link">Read More</a>
						</div>
					</div>
				</div>
				
			</div>


			<?php 
			
			}

			?>
		  





		</div>
	</section>



</div>






<?php  

get_footer();