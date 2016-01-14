<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('head', 1920, 800, true );
//add_image_size('squared', 1080, 1080, true );
//add_image_size('staff', 384, 600, true );
}
/* 
add_filter('image_size_names_choose', 'my_image_sizes');
	function my_image_sizes($sizes) {
	$addsizes = array(
		"col-6" => 'Media columna'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
*/
add_post_type_support('page', 'excerpt');
;?>
<?php 
if(is_single()){
	add_filter( 'show_admin_bar', '__return_false' );
}
?>
<?php 
/* Add support for wp_nav_menu() */
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú principal');
	register_nav_menu( 'secondary', 'Menú footer');
//	register_nav_menu( 'third', 'Menú interiores');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.0.min.js');
    wp_register_script('core', get_template_directory_uri() . '/js/core.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('core');
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php

// Register Custom Status
function entregado() {

	$args = array(
		'label'                     => 'Entregado',
		'label_count'               => 'Entregados',
		'public'                    => true,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'exclude_from_search'       => false,
	);
	register_post_status( 'entregado', $args );

}
add_action( 'init', 'entregado');

//Post type register

add_action('init', 'codes_register');
function codes_register() {
    $args = array(
        'label' => 'Chalequito Codes',
        'singular_label' => 'Code',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'codes'),
        'supports' => array('title', 'editor' , 'excerpt')
    );
    register_post_type('codes', $args);
    flush_rewrite_rules();
}
/*
add_action('init', 'clientes_register');
function clientes_register() {
    $args = array(
        'label' => 'Clientes',
        'singular_label' => 'Cliente',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'clientes'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('clientes', $args);
    flush_rewrite_rules();
}
 */
?>
<?php //register sidebars

/* register_sidebar(array(
  'name' => __( 'Home' ),
  'id' => 'home',
  'description' => __( 'Widgets en esta área se mostrarán en el home, utlice esta área para agregar la mini encuesta' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
)); */


//add_filter('widget_text', 'do_shortcode');

?>
<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
		body{ background-color:#3a3a3a;}
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important;
		background-size: 120px;
		height: 120px;
		margin: 0px auto 0px;
		width: 120px;
	}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID , $aporte) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        //$count++;
		$count;
        update_post_meta($postID, $count_key, $count+$aporte);
    }
}
?>
<?php 
//Sapea si el código es ganador, ya está usado o si te fuiste a la B por pollo

add_action('wp_ajax_verificaCodigoGanador', 'verificaCodigoGanador');
add_action('wp_ajax_nopriv_verificaCodigoGanador', 'verificaCodigoGanador');

function verificaCodigoGanador(){
	$codigo = $_GET['code'];
	$winner = $_GET['winner'];
	$winneremail = $_GET['winneremail'];
	
	$ss = get_posts(array('s' => $codigo , 'post_type' => 'codes' , 'post_status' => 'publish' , ));
	if($ss){
		foreach($ss as $chalequitocode):
        	$code = array(
				'ID' => $chalequitocode->ID ,
				'post_status' => 'entregado',
				'post_content' => $winner,
				'post_excerpt' => $winneremail,
			);
			wp_update_post($code);
			echo '1';
		endforeach;
	}else {
		echo '2';
	};
	die();
}

add_action('wp_ajax_verificaCodigoGanador_already', 'verificaCodigoGanador_already');
add_action('wp_ajax_nopriv_verificaCodigoGanador_already', 'verificaCodigoGanador_already');

function verificaCodigoGanador_already(){
	$codigo = $_GET['code'];
	$winner = $_GET['winner'];
	$winneremail = $_GET['winneremail'];
	
	$ss = get_posts(array('s' => $codigo , 'post_type' => 'codes' , 'post_status' => 'publish' , ));
	if($ss){
		foreach($ss as $chalequitocode):
        	$code = array(
				'ID' => $chalequitocode->ID ,
				'post_status' => 'entregado',
				'post_content' => $winner,
				'post_excerpt' => $winneremail,
			);
			wp_update_post($code);
			echo '1';
		endforeach;
	}else {
		echo '2';
	};
	die();
}
?>
<?php 
function SuperAdmin() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
	body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
	.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#129dd9 !important}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#2cb3ed !important}
	.wp-core-ui .button-primary{background-color:#2cb3ed !important}
	</style>';
}
add_action('admin_head', 'SuperAdmin');
?>
<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
?>
<?php 
//add_filter( 'jpeg_quality', create_function( '', 'return 75;' ) );
?>