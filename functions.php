<?php


//Menue in Header and Footer
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(array('header-menu' => __('Header Menu'),
							'footer-menu' => __('Footer Menu')));
}





//enable SVG
function kb_svg ( $svg_mime ){
	$svg_mime['svg'] = 'image/svg+xml';
	return $svg_mime;
}
add_filter( 'upload_mimes', 'kb_svg' );


//add Class to next & previous Post Link
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
//
function posts_link_attributes() {
    return 'class="postnav window"';
}


//EmbeddedVideo 
/*
function wp_embed_handler_video(){
    return 'class="EmbeddedVideo_ist_cool"';
}
*/


//remove Image Size from Article
add_filter( 'post_thumbnail_html', 'remove_width_and_height_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_and_height_attribute', 10 );
function remove_width_and_height_attribute( $html ) {
   return preg_replace( '/(height|width)="\d*"\s/', "", $html );
}

add_filter('gallery_style', create_function('$a', 'return "
<div class=\'gallery\'>";'));


//Widget-Area
function DM25_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'Footer',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'DM25_widgets_init' );






DM25_widgets_init();


?>