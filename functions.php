<?php
////////////////////////////////////////////////////////////////////////////////
// new code for wp 3.0+
////////////////////////////////////////////////////////////////////////////////
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    // Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

    if(EDITOR_BG_ENABLE == 'yes') {
    // This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
    // This theme allows users to set a custom background
	add_theme_support( 'custom-background' );
    }

	set_post_thumbnail_size( 200, 150, true ); // Normal post thumbnails
	add_image_size( 'single-post-thumbnail', 600, 9999 ); // Permalink thumbnail size
    add_theme_support( 'menus' ); // new nav menus for wp 3.0
}

if ( function_exists( 'register_nav_menus' ) ) {
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
        'top-nav' => __( 'Top Navigation',TEMPLATE_DOMAIN ),
        'main-nav' => __( 'Main Navigation',TEMPLATE_DOMAIN )
        )
    );
}

/*---------------------------diasable BP admin bar--------------------------------------*/
define( 'BP_DISABLE_ADMIN_BAR', true );
// define( 'BP_USE_WP_ADMIN_BAR', true );



///////////////////////////////////////////////////////////////////////////////
// Load Theme Styles and Javascripts
///////////////////////////////////////////////////////////////////////////////
/*---------------------------load styles--------------------------------------*/
if ( ! function_exists( 'agnet_theme_load_styles' ) ) :
function agnet_theme_load_styles() {
global $theme_version, $bp_existed;
wp_enqueue_style( 'agnet-base', get_template_directory_uri() . '/css/base.css', array(), $theme_version );
wp_enqueue_style( 'agnet-normalize', get_template_directory_uri() . '/css/normalize.css', array(), $theme_version );
}
endif;
add_action( 'wp_enqueue_scripts', 'agnet_theme_load_styles' );

/*---------------------------load js scripts--------------------------------------*/
if ( ! function_exists( 'agnet_theme_load_scripts' ) ) :
function agnet_theme_load_scripts() {
wp_enqueue_script("jquery");
wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.8.0.min.js', array("jquery"), $theme_version );
wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.1.min.js', array("jquery"), $theme_version );
}
endif;
add_action( 'wp_enqueue_scripts', 'agnet_theme_load_scripts' );



///////////////////////////////////////////////////////////////////////////////
// GET USER DETAILS FOR PRINT IN FRONT-END
///////////////////////////////////////////////////////////////////////////////
/*---------------------------get user ID--------------------------------------*/
global $user_ID;
get_currentuserinfo();

/*---------------------------get user detailed info for selected ID--------------------------------------*/
$user_info = get_userdata($user_ID);
//global $user_info;

function apellido1letra($lastname){
    $lastnameInitial = substr($lastname, 0, 1);
    return $lastnameInitial;
}



///////////////////////////////////////////////////////////////////////////////
// PROTECT WHOLE SITE AND REDIRECT USERS TO AUTH PAGE
///////////////////////////////////////////////////////////////////////////////
/*---------------------------protect whole site--------------------------------------*/
// function protect_whole_site() {
//     if ( !is_user_logged_in() ) {
//         auth_redirect();
//     }
// }
// add_action ('template_redirect', 'protect_whole_site');



///////////////////////////////////////////////////////////////////////////////
// LIMIT TEXT CHARACTERS IN POST
///////////////////////////////////////////////////////////////////////////////
/*---------------------------Limit Post Characters in Home Post Content Boxes--------------------------------------*/
function homeBoxContentResume($limit, $more_link_text) {
    if( strlen( get_the_excerpt() ) > 120 ) {
        $content = get_the_excerpt();
        $content = substr($content,0,$limit);
        echo $content."... ";
        echo "<a href='";
        echo the_permalink();
        echo "' class='more-link'>".$more_link_text."</a>";
    }else{
        the_excerpt();
    }
}



///////////////////////////////////////////////////////////////////////////////
// ADD SIDEBARS AND WIDGETS SUPPORT
///////////////////////////////////////////////////////////////////////////////
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Inicio - Lateral Derecha',
        'id' => 'sidebar-inicio-der',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2><div class="widget-wrap">',
    ));
}

?>
