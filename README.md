~~~html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WordPress &#8250; ReadMe</title>
	<link rel="stylesheet" href="wp-admin/css/install.css?ver=20100228" type="text/css" />
</head>
<body>
	<h3>
		
wp_enqueue_style( 'style-css', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


// logo
register_sidebar( array(
    'name'=>'Logo right',
    'id'=>'rightlogo',
    'before'=>'',
    'after'=>''
) );	

		
				
////////////////// custom post /////////////////////////////
function register_custom_post(){
// service start 
register_post_type('services',array(
'labels' => array(
    'name'=>__('Services'),
    'singular_name'=>__('service'),
    'add_new'               => __( 'Add New' ),
	'add_new_item'          => __( 'Add New service' ),
	'new_item'              => __( 'New service' ),
	'edit_item'             => __( 'Edit service'),
    'view_item'             => __( 'View service' ),
    'search_item'           => __( 'search service' ),
    'not_found'             => __( 'No service found.'),
	'not_found_in_trash'    => __( 'No service found in Trash.' ),
),
    'public'                => true,
    'rewrite'               => array( 'slug' => 'services' ),
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'menu_icon'             => 'dashicons-plugins-checked',
    'menu_position'         => 65,
	'supports'              => array( 'title', 'editor' )
));

// doctor start 
register_post_type('Doctors',array(
    'labels' => array(
        'name'=>__('Doctors'),
        'singular_name'=>__('Doctor'),
        'add_new'               => __( 'Add New' ),
        'add_new_item'          => __( 'Add New Doctor' ),
        'new_item'              => __( 'New Doctor' ),
        'edit_item'             => __( 'Edit Doctor'),
        'view_item'             => __( 'View Doctor' ),
        'search_item'           => __( 'search Doctor' ),
        'not_found'             => __( 'No Doctor found.'),
        'not_found_in_trash'    => __( 'No Doctor found in Trash.' ),
    ),
        'public'                => true,
        'rewrite'               => array( 'slug' => 'Doctors' ),
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-plugins-checked',
        'menu_position'         => 66,
        'supports'              => array( 'title')
    ));
}
add_action('init', 'register_custom_post');
	</h3>
  </body>
</html>

~~~ 
