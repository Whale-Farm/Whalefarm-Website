<?php

/**
* Clients Template File
*

* @package WhaleFarm

*/


get_header();

?> 


<?php 
   
    global $post;
   
    $page_slug = $post->post_name;

?>
 <section class="banner-area page-banner-area">
	<div class="container">


		<div class="row banner-text ">
			<div class="col-12 page-head-div text-md-center">
				<h1 class="page-title pt-4">
				<?php the_title(); ?>
				</h1>  
			</div>

			 

		</div>


	</div>
</section>


<div class="main-content single-page"> 
      <div class="container">

      	<div class="row">
      		
      		<?php
      		    // TO SHOW THE PAGE CONTENTS
      		    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
      		        
      		        <p>    <?php the_content(); ?> </p> <!-- Page Content -->
      		

      		    <?php
      		    endwhile; //resetting the page loop
      		    wp_reset_query(); //resetting the page query
      		    ?>  



      	</div>



            
            <section class="home-contact-form-sect mt-5">
                <div class="container">
                  <div class="row home-contact-head ">


                    <div class="col-12 cntct-head-text">
                      <h3 class="head-txt pb-3">
                       <a href="<?php echo site_url(); ?>/contact" class="getintouch-link ">Get Started</a> 
                      </h3>
                      

                    </div>

                   



                            
                          </div> 
                           


                        </div>
                        
                      </section>








      </div>



                     
</div>   


<?php $cat =  get_the_category();  


// The below portion will be only shown if the page category is services pages 

if($cat[0]->slug == 'services-pages'){ 

?>

  <section class="services-related-section">
                        <div class="container">
                              <div class="row related-section-head-div mb-4">
                                    <div class="col-12 related-head-wrap">
                                          <h2 class="related-head-text">


                        <!-- For the pages works portion we have made pages for services, now we will get the categories by using slug and then fetch the works portion accordingly                         -->

                        <!-- We will assign the term id based on the slug of the page -->

                        <?php 

                        // echo $page_slug;

                        if($page_slug =='paid-social'){

                              $current_term_id = 20;
                              $first_title = "Paid";
                              $second_title = "Social";

                              // 20 is the id of the 'paid social' category under services tab of work custom post type

                        }
                        if($page_slug =='paid-search'){

                              $current_term_id = 21;
                              $first_title = "Paid";
                              $second_title = "Search";

                              // 21 is the id of the 'paid search' category under services tab of work custom post type

                        }

                        if($page_slug =='email'){

                              $current_term_id = 22;
                              $first_title = "Email";
                              $second_title = "";

                              // 22 is the id of the 'email' category under services tab of work custom post type

                        }

                        if($page_slug =='local-ads'){

                              $current_term_id = 23;
                              $first_title = "Local";
                              $second_title = "Ads";

                              // 23 is the id of the 'local ads' category under services tab of work custom post type

                        }

                        if($page_slug =='websites'){

                              $current_term_id = 24;
                              $first_title = "Websites";
                              $second_title = "";

                              // 24is the id of the 'websites' category under services tab of work custom post type

                        }

                        if($page_slug =='landing-pages'){

                              $current_term_id = 25;
                              $first_title = "Landing";
                              $second_title = "Pages";

                              // 25 is the id of the 'landing pages' category under services tab of work custom post type

                        }

                         if($page_slug =='content-writing'){

                              $current_term_id = 26;
                              $first_title = "Content";
                              $second_title = "Writing";

                              // 25 is the id of the 'landing pages' category under services tab of work custom post type

                        }

                         if($page_slug =='ad-creatives'){

                              $current_term_id = 27;
                              $first_title = "Ad";
                              $second_title = "Creatives";

                              // 25 is the id of the 'landing pages' category under services tab of work custom post type

                        }


                        ?>





                      <!-- I have made a custom field for this title because it needed to be in 2 lines, its code is present on texonomy edit page with the label : Taxonomy Related Title Code  -->

                                                <?php //echo $taxonomy_related_title  = get_field('taxonomy_related_title_code', $current_term_taxonomy.'_'.$current_term_id, false, false);?>
                                                Related <?php echo $first_title; ?> <br class="whale-br">
                                                <?php echo $second_title; ?> Projects
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



<?php } ?>                       

<?php 

get_footer();
