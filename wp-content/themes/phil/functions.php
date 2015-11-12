<?php

add_theme_support('post-thumbnails');

add_theme_support('menus');

function new_excerpt_more($more) {

global $post;

return ' <a class="read" href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>';

}

add_filter('excerpt_more', 'new_excerpt_more');

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'gallery';
    remove_post_type_support( $post_type, 'editor');
}

add_action("pre_get_posts", "custom_front_page");
function custom_front_page($wp_query){
    //Ensure this filter isn't applied to the admin area
    if(is_admin()) {
        return;
    }

    if($wp_query->get('page_id') == get_option('page_on_front')):

        $wp_query->set('post_type', 'gallery');
        $wp_query->set('page_id', ''); //Empty

        //Set properties that describe the page to reflect that
        //we aren't really displaying a static page
        $wp_query->is_page = 0;
        $wp_query->is_singular = 0;
        $wp_query->is_post_type_archive = 1;
        $wp_query->is_archive = 1;

    endif;

}


//Page Slug Body Class
// function add_slug_body_class( $classes ) {
// global $post;
// if ( isset( $post ) ) {
// $classes[] = $post->post_type . '-' . $post->post_name;
// }
// return $classes;
// }
// add_filter( 'body_class', 'add_slug_body_class' );

//add_filter('mse_is_image_clickable', 'false');


function custom_post_type() {
	$labels = array(
		'name'                => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Gallery', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'gallery', 'text_domain' ),
		'description'         => __( 'Gallery Posts', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'gallery', $args );
}

function wpsites_home_page_cpt_filter($query) {
if ( !is_admin() && $query->is_main_query() && is_home() ) {
$query->set('post_type', array( 'gallery' ) );
    }
  }

  add_action('pre_get_posts','wpsites_home_page_cpt_filter');



// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

function replace_admin_menu_icons_css() {
    ?>
    <style>
    	#adminmenu #menu-posts, #adminmenu #menu-comments {
    		display: none;
    	}
      #adminmenu #menu-posts-gallery div.wp-menu-image:before {
			  content: "\f236";
			}
			#adminmenu #menu-posts-events div.wp-menu-image:before {
			  content: "\f488";
			}
			#adminmenu #menu-posts-news div.wp-menu-image:before {
				content: "\f336";
			}

    </style>
    <?php
}

add_action( 'admin_head', 'replace_admin_menu_icons_css' );

 ?>
