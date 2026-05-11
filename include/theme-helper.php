<?php
function header_logo(){
    
   global $mindu;
   $header_logo= $mindu['header-logo']['url'] ??  get_template_directory_uri()."/assets/img/logo/logo.png";
?>

    <a href="<?php echo home_url() ?>">
        <img width="85" src="<?php echo  esc_url($header_logo) ;?>" alt="<?php bloginfo(); ?>">
    </a>

<?php
}

function header_transparent_logo(){
    
   global $mindu;
   $header_logo_black= $mindu['header-logo']['url'] ??  get_template_directory_uri()."/assets/img/logo/logo.png";
   $header_logo_white= $mindu['header-logo-white']['url'] ??  get_template_directory_uri()."/assets/img/logo/logo-white.png";
?>

    <a href="<?php echo home_url() ?>">
        <img class="logo-1" width="85" src="<?php echo  esc_url($header_logo_white) ;?>" alt="<?php bloginfo(); ?>">
        <img class="logo-2 d-none" width="85" src="<?php echo  esc_url($header_logo_black) ;?>" alt="<?php bloginfo(); ?>">
    </a>

<?php
}

function header_menu(){
    wp_nav_menu( array(
	'theme_location' => 'main-menu',
    'container'          =>' ',
    'menu_class'       =>'menu-custom-ul-class ',
    'menu_id'           =>' new-id',
	'fallback_cb'    =>'Mindu_Walker_Nav_Menu::fallback',
    'walker'          => new Mindu_Walker_Nav_Menu,
) );

}

// Language Menu
 function language_menu(){
    wp_nav_menu(
        array(
        'theme_location' => 'Language_Menu',
        'container'          =>' ',
        'menu_class'       =>' ',
        'menu_id'           =>'',
        'fallback_cb'    =>'Mindu_Walker_Nav_Menu::fallback',
        'walker'          => new Mindu_Walker_Nav_Menu,
        )
     );
 }