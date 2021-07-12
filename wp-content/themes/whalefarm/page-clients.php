<?php

/**
* Clients Template File
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
				Our Clients
				</h1>  
			</div>

			 

		</div>


	</div>
</section>


<div class="main clients-page">
	<section class="our-clients-section py-5">
		<div class="container">


			<div class="row clients-parent-row">

				<!-- Inner columns are placed in the admin panel with the images -->

				<?php
				    // TO SHOW THE PAGE CONTENTS
				    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
				        
				            <?php the_content(); ?> <!-- Page Content -->
				

				    <?php
				    endwhile; //resetting the page loop
				    wp_reset_query(); //resetting the page query
				    ?> 


<!-- 
				<div class="col-lg-3 col-sm-4 col-6 client-img-main ">
					<div class="client-img-wrap p-3">
						<img src="images/clients/PS-Logo.png" alt="" class="client-img  ">
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/ET-Logo.png" alt="" class="client-img  ">
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/B4S-Logo.png" alt="" class="client-img  ">
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/MM-Logo.png" alt="" class="client-img  ">
					</div>
				</div>

				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/PLW-Logo.png" alt="" class="client-img  ">
					</div>
				</div>

				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/CS-Logo.png" alt="" class="client-img  ">
					</div>
				</div>

				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/EL-Logo.png" alt="" class="client-img  ">
					</div>
				</div>

				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/GW-Logo.png" alt="" class="client-img  ">
					</div>
				</div>

				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/MW-Logo.png" alt="" class="client-img  ">
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/WS-Logo.png" alt="" class="client-img  ">
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-6 client-img-main">
					<div class="client-img-wrap p-3">
						<img src="images/clients/POW-Logo.png" alt="" class="client-img  ">
					</div>
				</div> -->






			</div>	



		</div>
		</section>


		<?php echo do_shortcode(' [getintoucsection]');?>
			


		</div>	


<?php  

get_footer();