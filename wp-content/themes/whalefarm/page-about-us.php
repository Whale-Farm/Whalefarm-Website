<?php

/**
* About Us Template File
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
				 About Us
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>

			 

		</div>


	</div>
</section>


<div class="main about-us-page">

	<section class="our-mission-sect ">
		<div class="container">

			<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        
			            <?php the_content(); ?> <!-- Page Content -->
			

			    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
			    ?> 

		</div>



	</section>	

	<?php echo do_shortcode(' [getintoucsection]');?>	

</div>

<?php  

get_footer();