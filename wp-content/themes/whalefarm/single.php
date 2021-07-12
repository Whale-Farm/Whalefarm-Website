<?php get_header();?>

<?php


$post = get_post();

setup_postdata($post); 
 

$post_featured_img_url = get_the_post_thumbnail_url();

 ?>



 <section class="banner-area page-banner-area">
	<div class="container">


		<div class="row banner-text ">
			<div class="col-12 page-head-div text-md-center">
				<h2 class="page-title pt-4">
				Blog Detail
				</h2> 
			</div>

			 

		</div>


	</div>
</section>


<div class="main single-detail-page">

	<section  class="page-content my-5 pt-md-5">
		<div class="container">
			<div class="row single-post-content-sect">

				<div class="col-12 post-ftd-image text-center">
					<img src="<?php echo $post_featured_img_url;?>" alt="" class="ftd-image-post img-fluid img-thumbnail">
				</div>

				<div class="col-12 post-head-meta pt-5">
					<h1 class="post-head border-bottom pb-3">
						<?php the_title(); ?>
					</h1>
					<div class="row post-meta my-4">
					   <div class="col-sm-6 post-author text-sm-left text-center">
					      <p><i class="fa fa-edit mr-2"></i>Whale Farm Admin</p>
					   </div>
					   <div class="col-sm-6 social-sharing text-sm-right pr-1 text-center">
					      <p> <span class="mr-3">Share</span> 
					        <a href="http://twitter.com/share?text=$<?php the_title();?>&url=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fa  fa-twitter"></i></a>
					        <a href="http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fa  fa-facebook-f"></i></a>
					      </p>
					   </div>
					</div>
				</div>

				<div class="col-12 post-inner-content">

					<?php the_content(); ?>
					<!-- <h2 class="post-inner-head">
						How it works to be a good content writer ?
					</h2>
					<p class="post-para">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident exercitationem eum, hic facere nulla quas doloribus neque ut perferendis sed voluptate optio! Pariatur omnis laudantium commodi corrupti, qui ducimus assumenda voluptate ut totam minima, quaerat, dolor amet repellendus, optio eos?
					</p>

					<p class="post-para">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident exercitationem eum, hic facere nulla quas doloribus neque ut perferendis sed voluptate optio! Pariatur omnis laudantium commodi corrupti, qui ducimus assumenda voluptate ut totam minima, quaerat, dolor amet repellendus, optio eos?
					</p>

					<p class="post-para">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident exercitationem eum, hic facere nulla quas doloribus neque ut perferendis sed voluptate optio! Pariatur omnis laudantium commodi corrupti, qui ducimus assumenda voluptate ut totam minima, quaerat, dolor amet repellendus, optio eos?
					</p>

					<p class="post-para">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident exercitationem eum, hic facere nulla quas doloribus neque ut perferendis sed voluptate optio! Pariatur omnis laudantium commodi corrupti, qui ducimus assumenda voluptate ut totam minima, quaerat, dolor amet repellendus, optio eos?
					</p> -->
				</div>
				
			</div>
		</div>

	</section>

	<?php echo do_shortcode(' [getintoucsection]');?>
	
	
</div>		

<?php 

get_footer();