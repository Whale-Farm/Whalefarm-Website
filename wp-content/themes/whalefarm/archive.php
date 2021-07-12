<?php get_header();?>

<?php 

if (is_tax() || is_category() || is_tag() ) {

 $qobj = get_queried_object();
    // var_dump($qobj); // debugging only
// echo $qobj->name;
}
?>



<section class="banner-area page-banner-area">
	<div class="container">


		<div class="row banner-text ">
			<div class="col-12 page-head-div text-md-center">
				<h1 class="page-title pt-4">
				 Blog
				</h1> 
			</div> 
		</div> 
	</div>
</section>


<div class="main blog-page">

	<section id="blogpage" class="page-content my-5 pt-5">
		<div class="container">
			 

			<div class="row blog-content-main">



				<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				// concatenate the query
				   $args = array(
				     'posts_per_page' =>-1,
				     'paged' => $paged,
				     'orderby' => 'ASC',
				     'tax_query' => array(
				       array(
				         'taxonomy' => $qobj->taxonomy,
				         'field' => 'id',
				         'terms' => $qobj->term_id, 
				       )
				     )
				   );


				   $query = new WP_Query( $args );

				    if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();  

				    $post_data = get_post_meta($post->ID);

				    $post_featured_img_url = get_the_post_thumbnail_url($post->ID);


				    // echo $post->ID; 
				    
				    ?>



				<div class="col-lg-4 col-md-6 mt-md-0  mb-md-4 mt-4">
					<div class="card border-0">
						<a href="<?php  the_permalink(); ?>"> 
							<img src="<?php echo $post_featured_img_url;?>" class="card-img-top img-fluid" alt="">
							
						</a>
						<div class="card-body px-0">
							<a href="<?php  the_permalink(); ?>" class="blog-title my-3 d-block"><h4 class="card-title">
							 <?php echo get_the_title(); ?>							</h4></a>
							<p class="blog-excerpt">
								<?php  echo wp_trim_words( get_the_content(), 15, '...' ); ?>

							</p>

							<div class="row blog-date-admin px-3">
							<div class="col-md-7 blog-meta mt-3 pt-3 border-top  ">
								<span class="blog-adm"><i class="fa fa-pencil-square-o pr-1"></i> 
								 <?php echo get_the_author();?>
								</span> 
							</div>
							<div class="col-md-5 blog-date mt-3 pt-3 border-top text-left ">
							   <span><i class="fa fa-calendar pr-1"></i><?php echo get_the_date('d');?></span> 
							   <span><span><?php echo get_the_date('M');?>  <?php echo get_the_date('Y');?></span>
							</div>
						 </div>
						</div>
					</div>
				</div> 
 
   				

   				<?php endwhile; endif; ?>

   				 <?php //wp_pagenavi( array( 'query' => $query )); ?> 

   				 <?php wp_reset_postdata(); ?>


				 

 

			 


			</div>
		</div>
	</section>



</div>

<?php  

get_footer();