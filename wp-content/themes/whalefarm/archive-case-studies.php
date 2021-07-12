<?php

/**
* Casa Studa Template File
*

* @package WhaleFarm

*/


get_header();

?> 


 <section class="banner-area page-banner-area case-studies-archive">
  <div class="container">


    <div class="row banner-text ">
      <div class="col-12 page-head-div text-md-center">
        <h1 class="page-title pt-4">
         <?php echo post_type_archive_title( '', false ); ?>
        </h1>
        <!-- <p class="title-desc">
          Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
      </p> -->
      </div>

       

    </div>


  </div>
</section>
<div class="main case-studies-archive-page">
     <!-- <section class="case-arch-head">
        <div class="container-fluid">
           <div class="row justify-content-center">
              <div class="col-12 col-xl-9">
                 <div class="page-header">
                    <div class="page-header-shapes"></div>
                    <h1 class="page-title">Meet some of our customers</h1>
                    <p class="page-description">From startups to established companies, our mission is to help you grow.</p>
                 </div>
              </div>
           </div>
        </div>
     </section> -->
     <section class="case-page-head  ">
       <div class="container">
         <div class="row">
           <div class="col-12">
             <h2 class="case-head-txt">
               Meet Some of Our Customers
             </h2>
             <p class="case-head-desc">
                
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, nunc egestas nulla.

             </p>
           </div>
         </div>
       </div>
     </section>
     <div class="section section-case-study">
        <div class="container-fluid">
           <div class="row justify-content-center">
              <div class="col-12 col-xl-9 text-center">
                 <div class="case-studies-filter">


                  <!-- For counting all posts of a custom post type -->

                  <?php $case_count_posts = wp_count_posts( 'case-studies' )->publish; ?>

                    <div class="filter-item active" data-filter="all">All<span>
                      <?php echo $case_count_posts; ?>
                        
                      </span></div>


                    <!-- We are now fetching all the categories of the category "Case Studies" in the admin panel -->

                    <!-- For that we will need to know the ID of the parent category "case studies" -->
                    <!-- ID of the parent category is 13 -->



                    <?php

                      $case_studies_categories=get_categories(
                          array( 'parent' => 13 )
                      );

                      // print_r($case_studies_categories);

                      $counter = 1;


                      foreach ($case_studies_categories as $case_study_cat) { ?>

                        <?php //print_r($case_study_cat);

                        if($counter <= 4){

                        ?>
                        <div class="filter-item " data-filter="<?php echo $case_study_cat->slug; ?>">

                          <?php echo $case_study_cat->name; ?>

                          <span><?php echo count_cat_post($case_study_cat->term_id); ?></span></div>


                          <?php }else{?>

                          <div class="filters-hidden">

                            
                            

                            <div class="filter-item " data-filter="<?php echo $case_study_cat->slug; ?>">


                            <?php echo $case_study_cat->name; ?>

                            <span><?php echo count_cat_post($case_study_cat->term_id); ?></span></div>                         
                            
                            

                            <div class="filter-view-less">View Less Industries</div> 

                          </div>
                          
                          <?php   } ?>

                          <?php $counter = $counter + 1; ?>

                          <!-- Counter ends above -->
                        
                      <?php }



                    ?>
                     
                     
                   <!--  <div class="filters-hidden">
                       <div class="filter-item" data-filter=".translation-localization">Translation &amp; Localization<span>1</span></div>
                       <div class="filter-item" data-filter=".mechanical-industrial-engineering">Mechanical Or Industrial Engineering<span>1</span></div>
                        

                       <div class="filter-view-less">View Less Industries</div>
                    </div> -->
                 </div>
                 <div class="filter-view-more">View More Industries</div>
              </div>
           </div>
        </div>
     </div>
     <div class="case-studies" style="position: relative; ">
        <!-- <div class="case-study most-viewed financial-services" style="position: absolute; left: 0%; top: 0px;">
           <div class="container-fluid">
           </div> 
           </div> -->
        <!--  <div class="case-study most-viewed financial-services" style="position: absolute; left: 0%; top: 0px;">
           -->    



        <!-- Now we are applying loop for fetching custom post types based on the categories              -->
        
        <?php

        $args = array(
                'post_type' => 'case-studies',
                'posts_per_page' => -1
            );
        $the_query = new WP_Query($args);

        if($the_query->have_posts() ) :

            while ( $the_query->have_posts() ) :

               $the_query->the_post(); 

               $post_category = get_the_category(get_the_ID());

               // print_r($post_category );

               foreach ($post_category as $cat) {


                // echo $cat->slug;

                // This name will be used below in the content

                $cat_name = $cat->name;

               }
               // echo "yes".$post_category = $post_category->slug;

               // print_r($post_category_slug);


               // ===== ACF Fields Values =====

               $testimonial_portion = get_field('case_study_testimonial_portion',get_the_ID());

                 $reviewer_name =  $testimonial_portion['reviewer_name'];
               // reviewer_name
                  $reviewer_designation= $testimonial_portion['reviewer_designation'];
               // reviewer_designation
                  $review_text= $testimonial_portion['review_text'];
               // review_text 
                 $reviewer_image=  $testimonial_portion['reviewer_image'];  
               // reviewer_image
                  $reviewer_image_url = $reviewer_image['url'];

                  $post_img_url = get_the_post_thumbnail_url();


                  // Charts portion

                  $results_portion = get_field('case_study_results',get_the_ID());

                  $open_rate = $results_portion['open_rate'];
                  $response_rate = $results_portion['response_rate'];
                  $opportunity_rate = $results_portion['opportunity_rate'];


         ?>

        <div class="case-study filter <?php foreach ($post_category as $cat) {
                echo ' '.$cat->slug;
               } ?> even"  >
           <div class="container-fluid">
              <div class="row justify-content-center">
                 <div class="col-12 col-xl-9">
                    <div class="box-case-study">
                       <div class="case-header">
                          <h5 class="case-title"> 

                            <?php the_title(); ?>

                          </h5>
                          <span class="case-study-industry">
                            <?php echo $cat_name; ?>
                          </span>
                       </div>
                       <div class="case-content">
                          <div class="case-image">
                             <img src="<?php echo $post_img_url; ?>" class="img-fluid" alt="iZettle">
                          </div>
                          <div class="case-testimonials">
                             <p class="testimonial">
                              <?php echo $review_text; ?>
                             </p>
                             <div class="testimonial-details">
                                <div class="client-content">
                                   <div class="client-image">
                                      <img src="<?php echo $reviewer_image_url; ?>" alt="Alan Garland">
                                   </div>
                                   <div class="client-details">
                                      <h5 class="client-name"><?php echo $reviewer_name; ?></h5>
                                      <p class="client-title"><?php echo $reviewer_designation; ?></p>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <!-- Case results
                             -->
                          <div class="row case-results-row px-0">
                             <div class="case-results-charts col-lg-8 mx-0 px-0">
                                <div class="row px-0 mx-0">
                                   <div class="col-md-3 result-head-div mt-5 d-inline-block">
                                      <h3 class="resutl-head-txt">
                                         Results
                                      </h3>
                                   </div>
                                   <div class="col-md-9 results-chart-div d-inline-block">
                                      <div class="single-chart-main-div">
                                         <div class=" skill-item">
                                            <div class="chart-container">
                                               <div class="chart " data-percent="<?php echo $open_rate; ?>" data-bar-color="#35C1D0">
                                                  <span class="percent" data-after="%"><?php echo $open_rate; ?></span>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="chart-text-div">
                                            Open Rate
                                         </div>
                                      </div>
                                      <div class="single-chart-main-div">
                                         <div class=" skill-item">
                                            <div class="chart-container">
                                               <div class="chart " data-percent="<?php echo $response_rate; ?>" data-bar-color="#35C1D0">
                                                  <span class="percent" data-after="%"><?php echo $response_rate; ?></span>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="chart-text-div">
                                            Response Rate
                                         </div>
                                      </div>
                                      <div class="single-chart-main-div">
                                         <div class=" skill-item">
                                            <div class="chart-container">
                                               <div class="chart " data-percent="<?php echo $opportunity_rate; ?>" data-bar-color="#35C1D0">
                                                  <span class="percent" data-after="%"><?php echo $opportunity_rate; ?></span>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="chart-text-div">
                                            Opportunity Rate
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="case-results-link col-lg-4">
                                <div class="result-link-div-wrap">
                                   <a href="<?php  the_permalink(); ?>" class="view-full-case">
                                   View full case study 
                                   <i class="fa fa-long-arrow-right ml-2"></i>
                                   </a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>


        <?php 

        endwhile; 
        wp_reset_postdata(); 
        else: 
          echo "Sorry no post matched to your criteria.";
        endif;

        ?>


    <!-- Case study 2 -->

  <!--   <div class="case-study filter computer-software"  >
       <div class="container-fluid">
          <div class="row justify-content-center">
             <div class="col-12 col-xl-9">
                <div class="box-case-study">
                   <div class="case-header">
                      <h5 class="case-title">IBM International</h5>
                      <span class="case-study-industry">Computer Software</span>
                   </div>
                   <div class="case-content">
                      <div class="case-image">
                         <img src="<?php echo get_template_directory_uri();?>/images/case-studies/izettle.jpg" class="img-fluid" alt="iZettle">
                      </div>
                      <div class="case-testimonials">
                         <p class="testimonial">I’m very happy so far with the performance and the professionalism of the bant.io team, and I’m glad that our collaboration has gone from a one-off engagement to a long-term partnership. I’m looking forward to seeing what the future brings!</p>
                         <div class="testimonial-details">
                            <div class="client-content">
                               <div class="client-image">
                                  <img src="<?php echo get_template_directory_uri();?>/images/case-studies/alan_garland.png" alt="Alan Garland">
                               </div>
                               <div class="client-details">
                                  <h5 class="client-name">Moris Mano</h5>
                                  <p class="client-title">IT Specialist</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      
                      <div class="row case-results-row px-0">
                         <div class="case-results-charts col-md-8 mx-0 px-0">
                            <div class="row px-0 mx-0">
                               <div class="col-md-3 result-head-div mt-5 d-inline-block">
                                  <h3 class="resutl-head-txt">
                                     Results
                                  </h3>
                               </div>
                               <div class="col-md-9 results-chart-div d-inline-block">
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="80" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">80</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Open Rate
                                     </div>
                                  </div>
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="88" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">88</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Response Rate
                                     </div>
                                  </div>
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="92" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">92</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Opportunity Rate
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="case-results-link col-md-4">
                            <div class="result-link-div-wrap">
                               <a href="" class="view-full-case">
                               View full case study 
                               <i class="fa fa-long-arrow-right ml-2"></i>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div> -->



  <!-- ================= Computer Software Second ================ -->


  <!--   <div class="case-study filter computer-software"  >
       <div class="container-fluid">
          <div class="row justify-content-center">
             <div class="col-12 col-xl-9">
                <div class="box-case-study">
                   <div class="case-header">
                      <h5 class="case-title">APPLE Inc</h5>
                      <span class="case-study-industry">Computer Software</span>
                   </div>
                   <div class="case-content">
                      <div class="case-image">
                         <img src="<?php echo get_template_directory_uri();?>/images/case-studies/izettle.jpg" class="img-fluid" alt="iZettle">
                      </div>
                      <div class="case-testimonials">
                         <p class="testimonial">I’m very happy so far with the performance and the professionalism of the bant.io team, and I’m glad that our collaboration has gone from a one-off engagement to a long-term partnership. I’m looking forward to seeing what the future brings!</p>
                         <div class="testimonial-details">
                            <div class="client-content">
                               <div class="client-image">
                                  <img src="<?php echo get_template_directory_uri();?>/images/case-studies/alan_garland.png" alt="Alan Garland">
                               </div>
                               <div class="client-details">
                                  <h5 class="client-name">Moris Mano</h5>
                                  <p class="client-title">IT Specialist</p>
                               </div>
                            </div>
                         </div>
                      </div>
                    
                      <div class="row case-results-row px-0">
                         <div class="case-results-charts col-md-8 mx-0 px-0">
                            <div class="row px-0 mx-0">
                               <div class="col-md-3 result-head-div mt-5 d-inline-block">
                                  <h3 class="resutl-head-txt">
                                     Results
                                  </h3>
                               </div>
                               <div class="col-md-9 results-chart-div d-inline-block">
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="80" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">80</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Open Rate
                                     </div>
                                  </div>
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="88" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">88</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Response Rate
                                     </div>
                                  </div>
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="92" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">92</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Opportunity Rate
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="case-results-link col-md-4">
                            <div class="result-link-div-wrap">
                               <a href="" class="view-full-case">
                               View full case study 
                               <i class="fa fa-long-arrow-right ml-2"></i>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
   -->

    <!-- ============== End Computer Software Second ============= -->






    <!-- =========== End second case study ========== -->




    <!-- Case study 3 -->
  <!-- 
    <div class="case-study filter it-services even"  >
       <div class="container-fluid">
          <div class="row justify-content-center">
             <div class="col-12 col-xl-9">
                <div class="box-case-study">
                   <div class="case-header">
                      <h5 class="case-title">Amazon </h5>
                      <span class="case-study-industry">IT Services</span>
                   </div>
                   <div class="case-content">
                      <div class="case-image">
                         <img src="<?php echo get_template_directory_uri();?>/images/case-studies/izettle.jpg" class="img-fluid" alt="iZettle">
                      </div>
                      <div class="case-testimonials">
                         <p class="testimonial">I’m very happy so far with the performance and the professionalism of the bant.io team, and I’m glad that our collaboration has gone from a one-off engagement to a long-term partnership. I’m looking forward to seeing what the future brings!</p>
                         <div class="testimonial-details">
                            <div class="client-content">
                               <div class="client-image">
                                  <img src="<?php echo get_template_directory_uri();?>/images/case-studies/alan_garland.png" alt="Alan Garland">
                               </div>
                               <div class="client-details">
                                  <h5 class="client-name">Moris Mano</h5>
                                  <p class="client-title">IT Specialist</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      
                      <div class="row case-results-row px-0">
                         <div class="case-results-charts col-md-8 mx-0 px-0">
                            <div class="row px-0 mx-0">
                               <div class="col-md-3 result-head-div mt-5 d-inline-block">
                                  <h3 class="resutl-head-txt">
                                     Results
                                  </h3>
                               </div>
                               <div class="col-md-9 results-chart-div d-inline-block">
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="85" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">85</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Open Rate
                                     </div>
                                  </div>
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="90" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">90</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Response Rate
                                     </div>
                                  </div>
                                  <div class="single-chart-main-div">
                                     <div class=" skill-item">
                                        <div class="chart-container">
                                           <div class="chart " data-percent="100" data-bar-color="#35C1D0">
                                              <span class="percent" data-after="%">100</span>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="chart-text-div">
                                        Opportunity Rate
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="case-results-link col-md-4">
                            <div class="result-link-div-wrap">
                               <a href="" class="view-full-case">
                               View full case study 
                               <i class="fa fa-long-arrow-right ml-2"></i>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
   -->



    <!-- =========== End second case study ========== -->



     </div>



    <!--  <section class="request-quote">
        <div class="container-fluid">
           <div class="row justify-content-center">
              <div class="col-12 col-xl-9 footer-cta-wrap">
                 <div class="footer-cta">
                    <div class="footer-cta-shape"></div>
                    <div class="footer-cta-container">
                       <h3 class="footer-cta-title">Ready to get started?</h3>
                       <p>Schedule a personalized demo with one of our consultants and discover how Whaelfarm can help you reach your sales goals.</p>
                    </div>
                    <div class="footer-cta-buttons">
                       <a href="/contact" class="btn btn-primary"><i class="fa fa-paper-plane mr-2"></i>Request a demo</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section> -->


<?php echo do_shortcode(' [getintoucsection]');?>
  <!--  <section class="request-quote">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-12 col-xl-9 footer-cta-wrap">
               <div class="footer-cta">
                  <div class="footer-cta-shape"></div>
                  <div class="footer-cta-container">
                     <h3 class="footer-cta-title">Ready to get started?</h3>
                     <p>Schedule a personalized demo with one of our consultants and discover how Whaelfarm can help you reach your sales goals.</p>
                  </div>
                  <div class="footer-cta-buttons">
                     <a href="/contact" class="btn btn-primary"><i class="fa fa-paper-plane mr-2"></i>Request a demo</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
</div>
<?php  

get_footer();
