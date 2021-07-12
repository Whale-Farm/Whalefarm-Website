<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css"  >
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
	 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 
	 <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/wpcss.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/menu-animation.css">



	<!-- Owl Carousal Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">

	<!-- Lightbox plugin -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/lightbox.css">

	<!-- Chart case studies  -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/case-study-css.css">

	<?php wp_head();?>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_url(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_url(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_url(); ?>/favicon-16x16.png">


</head>
<body <?php body_class();?>>

	<?php if(function_exists('wp_body_open() ')){
    
    wp_body_open();

	}
	?>


	<!-- We are fetching the current page slug for adding active class to the menu item -->


	<?php global $post; ?>
	<?php $current_page_slug = $post->post_name; ?>

	<header id="header" class="header w-100 sticky-top">
	   <div class="container">
	      <div class="row pt-3 pt-sm-0 pb-3 pb-lg-0 header-main-row">
	         <div class="col p-0">
	            <nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-4 pt-2 ">
	               <a href="<?php echo get_site_url(); ?>" class="navbar-brand  web-logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" ></a>
	               <button class="navbar-toggler" type="button" onclick="openmobileNav()" data-toggle="collapse" data-target="#whale-nav">
	               <span class="navbar-toggler-icon"></span>
	               </button>
	               <div class="collapse navbar-collapse justify-content-end m-4 m-lg-0" id="whale-nav">
	                  <ul class="navbar-nav justify-content-lg-end text-center text-lg-left mr-1 w-100">  
	                     <li class="nav-item  "><a href="<?php echo site_url();?>/about-us" class="nav-link <?php if (is_page('about-us')) echo 'active';?>">About Us</a></li>
	                     <li class="nav-item dropdown ">  <a class="nav-link dropdown-toggle mobile-toggle <?php if (is_archive('services') ||  is_singular( 'services' ) || is_page('services') )   echo 'active'; ?>" href="<?php echo site_url();?>/services" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                     	  Services
	                     	</a> 


	                     	<!-- Here I am fetching all the terms of taxonomy services -->


	                     	<ul class="dropdown-menu inner-submenu" aria-labelledby="navbarDropdownMenuLink">

	                     	    <li><a href="<?php echo site_url();?>/services" class="dropdown-item">All Services </a></li>
	                     	    <div class="dropdown-divider" class="dropdown-item"></div>
	                     	     <li  class="dropdown-submenu"><a href="#" class="dropdown-item dropdown-toggle mobile-toggle"  >Digital Marketing</a>

	                     	    	<ul class="dropdown-menu inner-submenu">
	                     	    		

	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/paid-social/">Paid Social</a></li>
	                     	    		<div class="dropdown-divider"></div>
	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/paid-search/">Paid Search</a></li>
	                     	    		<div class="dropdown-divider"></div>
	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/email/">Email</a></li>
	                     	    		<div class="dropdown-divider"></div>
	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/local-ads">Local Ads</a></li> 
	                     	    		<!-- <div class="dropdown-divider"></div>
	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/services/digital-marketing/">All Digital Marketing Services </a></li> -->
	                     	    	</ul>	

	                     	    </li> 
	                     	    <div class="dropdown-divider"></div>
	                     	    <li class="dropdown-submenu">

	                     	    	<a href="<?php echo site_url(); ?>/services/web-design-development/" class="dropdown-item dropdown-toggle mobile-toggle">Web design and development</a>

	                     	    	<ul class="dropdown-menu inner-submenu">

	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/websites/">Websites</a></li>
	                     	    		<div class="dropdown-divider"></div>
	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/landing-pages/">Landing Pages</a></li>
	                     	    		<div class="dropdown-divider"></div>



	                     	    	</ul>	

	                     	    </li>
	                     	      <div class="dropdown-divider"></div>

	                     	    <li class="dropdown-submenu"><a href="<?php echo site_url(); ?>/services/creative-and-copy/" class="dropdown-item dropdown-toggle mobile-toggle">Creative and Copy</a>

	                     	    	<ul class="dropdown-menu inner-submenu">

	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/content-writing/">Content Writing</a></li>
	                     	    		<div class="dropdown-divider"></div>
	                     	    		<li><a class="dropdown-item" href="<?php echo site_url(); ?>/ad-creatives/">Ad Creatives</a></li>
	                     	    		<div class="dropdown-divider"></div>

	                     	    	</ul>	

	                     	    </li>


	                     	    <div class="dropdown-divider"></div>
	                     	    <li><a href="<?php echo site_url(); ?>/services/consulting/" class="dropdown-item">Consulting</a></li>
	                     	   
	                     	     
	                     	</ul>


	                     </li>
	                     <li class="nav-item "><a href="<?php echo site_url();?>/pricing" class="nav-link <?php if (is_page('pricing')) echo 'active';?>">Pricing</a></li>
	                     <li class="nav-item "><a href="<?php echo site_url();?>/clients" class="nav-link <?php if (is_page('clients')) echo 'active';?>">Clients</a></li>
	                     <li class="nav-item "><a href="<?php echo site_url();?>/reviews" class="nav-link <?php if (is_page('reviews')) echo 'active';?>">Reviews</a></li>
	                     
	                     
	                  </ul> 

	                   <a href="<?php echo site_url();?>/contact" class="talk-btn"> Get In Touch  </a>  
	               </div>
	            </nav>


	            <!-- Mobile menu starts from here -->


	                        <div id="mobileNav" class="mobileOverlay">

	                          <!-- Button to close the overlay navigation -->
	                          <a href="javascript:void(0)" class="closebtn" onclick="closemobileNav()">&times;</a>
	            

	                          <nav class="nav-mobile" id="mobileNavInner">

	                          	<div class="mobile-logo-div mb-5">
	                          		<img src="<?php echo get_template_directory_uri();?>/images/mobile-logo.svg" alt="" class="imgfluid">
	                          	</div>
	                          	<ul class="navbar-nav">
	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>" class="nav-link <?php if (is_front_page()) echo 'active'; ?>">Home</a>
	                          		</li>
	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>/about-us" class="nav-link <?php if (is_page('about-us')) echo 'active';?>">About</a>
	                          		</li>
	                          		<li class="nav-item">
	                          			<a  data-toggle="collapse"  href="#services-nav" role="button" class="nav-link have-sub-menu <?php if (is_archive('services') ||  is_singular( 'services' ) || is_page('services') )   echo 'active'; ?>">Services</a>

	                          			<ul id="services-nav" class="collapse first-level-dropdown have-border have-transition">


	                          				<li class="nav-item">
	                          					<a  data-toggle="collapse"  href="#dm-nav" class="nav-link have-sub-menu">
	                          					Digital Marketing
	                          				    </a>

	            		              				<ul class="  second-level-dropdown collapse have-border have-transition"  id="dm-nav">

	            		              					<li class="nav-item">
	            		              						<a href="<?php echo site_url(); ?>/paid-social/" class="nav-link">
	            		              						Paid Social
	            		              					</a>
	            		              						
	            		              					</li> 
	            		              					<li class="nav-item"><a href="<?php echo site_url(); ?>/paid-search/" class="nav-link">
	            		              						Paid Search
	            		              					</a>
	            		              						
	            		              					</li> 
	            		              					<li class="nav-item"><a href="<?php echo site_url(); ?>/email/" class="nav-link">
	            		              						Email
	            		              					</a>
	            		              						
	            		              					</li>
	            		              					<li class="nav-item"><a href="<?php echo site_url(); ?>/local-ads/" class="nav-link">
	            		              						Local Ads
	            		              					</a>
	            		              						
	            		              					</li>
	            		              					
	            		              				</ul>
	            		              					
	                          				</li> 
	                          				<li class="nav-item">
	                          					<a data-toggle="collapse"  href="#web-nav" class="nav-link have-sub-menu">
	                          					Web Design and Development
	                          					</a>



	                          					<ul class=" second-level-dropdown collapse have-border have-transition"  id="web-nav">

	                          						<li class="nav-item"><a href="<?php echo site_url(); ?>/websites/" class="nav-link">
	                          							Websites 
	                          						</a>
	                          							
	                          						</li> 
	                          						<li class="nav-item"><a href="<?php echo site_url(); ?>/landing-pages/" class="nav-link">
	                          							Landing Pages
	                          						</a>
	                          							
	                          						</li>  
	                          						
	                          					</ul>


	                          					
	                          				</li> 
	                          				<li class="nav-item">
	                          					<a data-toggle="collapse"  href="#creative-nav" class="nav-link have-sub-menu">
	                          					Creative and Copy
	                          					</a>


	                          					<ul class=" second-level-dropdown collapse have-border have-transition"  id="creative-nav">

	                          						<li class="nav-item"><a href="<?php echo site_url(); ?>/content-writing/" class="nav-link">
	                          							Content Writing
	                          						</a>
	                          							
	                          						</li> 
	                          						<li class="nav-item"><a href="<?php echo site_url(); ?>/ad-creatives/" class="nav-link">
	                          							Ad Creatives
	                          						</a>
	                          							
	                          						</li>  
	                          						
	                          					</ul>

	                          					
	                          				</li> 
	                          				<li class="nav-item"><a href="<?php echo site_url(); ?>/services/consulting/" class="nav-link">
	                          					Consulting
	                          				</a>
	                          					
	                          				</li> 
	                          			</ul>
	                          		</li>

	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>/works" class="nav-link <?php if (is_page('works')) echo 'active';?>">Works</a>
	                          		</li>
	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>/pricing" class="nav-link <?php if (is_page('pricing')) echo 'active';?>">Pricing</a>
	                          		</li>
	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>/clients" class="nav-link <?php if (is_page('clients')) echo 'active';?>">Clients</a>
	                          		</li>
	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>/reviews" class="nav-link <?php if (is_page('reviews')) echo 'active';?>">Reviews</a>
	                          		</li>
	                          		<li class="nav-item">
	                          			<a href="<?php echo site_url();?>/contact" class="nav-link <?php if (is_page('contact')) echo 'active';?>">Contact</a>
	                          		</li>
	                          	</ul>

	                          	<a href="<?php echo site_url();?>/contact" class="talk-btn"> Get In Touch  </a>
	                          </nav>
	                        

	                        </div>

	                       <!-- Mobile menu ends here  -->
	         </div>
	      </div>
	   </div>
	</header>
