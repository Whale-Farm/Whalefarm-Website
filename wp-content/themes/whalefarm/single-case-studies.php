<?php

/**
* Casa Studa Detail Template File
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
       case study - <?php the_title(); ?>
       </h1>
       <!-- <p class="title-desc">
         Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
     </p> -->
     </div>

      

   </div>


 </div>

</section> 


<div class="main case-studies-detail-page">
    


<!-- =========== ACF fields =========== -->

<?php
$detail_page_data = get_field('case_study_detail_page',get_the_ID());


$case_study_logo = $detail_page_data['case_study_logo'];

  $case_study_logo_url = $case_study_logo['url'];


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


     $post_category = get_the_category(get_the_ID());

     // print_r($post_category );

     foreach ($post_category as $cat) {


      // echo $cat->slug;

      // This name will be used below in the content

      $cat_name = $cat->name;

     }



?>


   <!-- ============= Case Study Detail Page =========== -->

   <div class="section page-case-study-details">
               <div class="container-fluid">
                   <div class="row justify-content-center">
                       <div class="col-12 col-xl-9">
                           <div class="row">
                               <div class="col-12 col-lg-4">
                                   <div class="card case-study-details">
                                       <div class="card-body">
                                           <a target="_blank" href="#" class="case-study-logo">
                                            <?php if(!empty($case_study_logo_url )) { ?>
                                               <img src="<?php echo  $case_study_logo_url;?>" class="img-fluid" alt="iZettle Logo">
                                             <?php  }else{ echo get_the_title();  

                                              }

                                              ?>
                                           </a>
                                           <ul class="case-study-overview">
                                               <li><i class="fa fa-user-circle"></i><strong class="mr-1">CLIENT: </strong> <?php the_title(); ?> </li>
                                               <li><i class="fa fa-tag"></i><strong class="mr-1">INDUSTRY: </strong>

                                               <?php echo " ".$cat_name; ?>

                                             </li>
                                           </ul>
                                           <p class="case-study-testimonials">
                                             <?php echo $review_text; ?>
                                           </p>
                                           <div class="case-study-customer">
                                               <img src="<?php echo get_template_directory_uri();?>/images/case-studies/alan_garland.png" class="img-fluid" alt="Alan Garland">
                                               <div class="customer-details">
                                                   <h5><?php echo $reviewer_name; ?></h5>
                                                   <p><?php echo $reviewer_designation; ?></p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="row case-study-charts detail-page-charts">

                                   	<div class="single-chart-main-div">
                                   	   <div class=" skill-item">
                                   	      <div class="chart-container">
                                   	         <div class="chart " data-percent="<?php echo $open_rate; ?>" data-bar-color="#0064A1">
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
                                   	         <div class="chart " data-percent="<?php echo $response_rate; ?>" data-bar-color="#0064A1">
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
                                   	         <div class="chart " data-percent="<?php echo $opportunity_rate; ?>" data-bar-color="#0064A1">
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

                               <div class="col-12 col-lg-8">


                                <?php
                                    // TO SHOW THE PAGE CONTENTS
                                    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                        
                                            <?php the_content(); ?> <!-- Page Content -->
                                

                                    <?php
                                    endwhile; //resetting the page loop
                                    wp_reset_query(); //resetting the page query
                                    ?> 



                                  <!--  <div class="case-study-page-section">
                                       <h3 class="section-title">Customer story</h3>
                                       <p class="whale-para">iZettle is a one-stop shop for cutting-edge commerce tools, ease day-to-day management and the ability to take quick payments from customers. It helps to grow its customers’ businesses by more than 15% per year by making it easier than ever to close a sale.</p>
                                       <p class="whale-para">When iZettle approached bant.io, they needed help generating new business and growing their overall profit. We partnered with them to develop a strategy that helped potential customers to see the true value of their EPOS system while simultaneously introducing the brand to a huge pool of prospects.</p>
                                       <p class="whale-para">The leads started flowing in after the first few days and the results continued to improve over time. In total, the initial campaign  generated 134 hot leads and a number of valuable conversations with a great support from the re-targeting campaign as well. And for iZettle, the good news is that getting in front of potential customers is the hard part – once they see what it can do, the product sells itself!</p>
                                   </div>
                                   <div class="case-study-page-section">
                                       <h3 class="section-title">Problem</h3>
                                       <p class="whale-para">iZettle wanted to promote a specific electronic point of sale (EPOS) system inside the United Kingdom and to engage more hotels, restaurants and stores to use their award winning platform.
                                   </p></div>
                                   <div class="case-study-page-section">
                                       <h3 class="section-title">Solution</h3>
                                       <ul>
                                           <li>6339 prospective clients reached</li>
                                           <li>2 email sequences developed</li>
                                           <li>3 A/B tests performed</li>
                                       </ul>
                                   </div>
                                   <div class="case-study-page-section">
                                       <h3 class="section-title">Campaign Results</h3>
                                       <ul>
                                           <li>50% Open Rate</li>
                                           <li>51% Response Rate</li>
                                           <li>38% Conversions to Opportunities</li>
                                           <li>134 Hot Leads</li>
                                       </ul>
                                   </div> -->


                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- ================= End Page ================== -->

    

<!-- 
     <section class="request-quote">
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
 