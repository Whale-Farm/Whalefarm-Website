<?php

/**
 *
 * Theme Functions
 *
 * @package Wahlefarm
 */

?>


 <?php

// == Theme Support
function whalefarm_theme_setup()
{

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');

}

add_action('after_setup_theme', 'whalefarm_theme_setup');

function register_my_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu') ,
        'footer-menu' => __('Footer Menu')
    ));
}

add_action('init', 'register_my_menus');

function support_category_for_pages() {  
    // Add category support to pages
    register_taxonomy_for_object_type('category', 'page');  
}
add_action( 'init', 'support_category_for_pages' );

// ==== function to get the php code run in widget
function whalefarm_php_text($text)
{
    if (strpos($text, '<' . '?') !== false)
    {
        ob_start();
        eval('?' . '>' . $text);
        $text = ob_get_contents();
        ob_end_clean();
    }
    return $text;
}

add_filter('widget_text', 'whalefarm_php_text', 99);

function whalefarm_widgets_init()
{

    register_sidebar(array(
        'name' => __('Get In Touch Section') ,
        'id' => 'get_in_touch_section',
        'before-widget' => '',
        'after-widget' => '',
        'class' => '',
    ));

}

add_action('widgets_init', 'whalefarm_widgets_init');

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
// For Acf we can remove like this
remove_filter('acf_the_content', 'wpautop');
// For widgets
remove_filter('widget_text_content', 'wpautop');

// ACF Display Custom Fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

function getin_touch_shortcode()
{ ?>

<section class="home-contact-form-sect">
    <div class="container">
      <div class="row home-contact-head ">


        <div class="col-12 cntct-head-text">
          <h3 class="head-txt pb-3">
           <a href="<?php echo site_url(); ?>/contact" class="getintouch-link ">Get In Touch</a> 
          </h3>
          

        </div>

       



                
              </div> 
               


            </div>
            
          </section>

    <?php
}

// register shortcode
add_shortcode('getintoucsection', 'getin_touch_shortcode');

function my_acf_add_local_field_groups()
{
    remove_filter('acf_the_content', 'wpautop');
}
add_action('acf/init', 'my_acf_add_local_field_groups');

function count_cat_post($category)
{
    if (is_string($category))
    {
        $catID = get_cat_ID($category);
    }
    elseif (is_numeric($category))
    {
        $catID = $category;
    }
    else
    {
        return 0;
    }
    $cat = get_category($catID);
    return $cat->count;
}

