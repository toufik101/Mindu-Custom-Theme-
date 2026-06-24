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


  function footer_menu(){
    wp_nav_menu(
        array(
        'theme_location' => 'Footer_Menu',
        'container'          =>' ',
        'menu_class'       =>' ',
        'menu_id'           =>'',
        'fallback_cb'    =>'Mindu_Walker_Nav_Menu::fallback',
        'walker'          => new Mindu_Walker_Nav_Menu,
        )
     );
 }

 // mindu_pagination 
function mindu_blog_pagination(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.75 5.75H0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.75 10.75L0.75 5.75L5.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>','mindu'),
        'next_text'    => __('<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.75 5.75H10.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.75 10.75L10.75 5.75L5.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>','mindu'),
    ) );
        if( $pages ) {
        echo '<ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
}


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
	$form = '
    <div class="tp-sidebar-search p-relative mb-40">
                        <form role="search" action="' . home_url( '/' ) . '"  method="get">
                           <input class="tp-input" type="text" value="' . get_search_query() . '" name="s" placeholder="Search ...">
                           <button class="tp-sidebar-search-btn" type="submit" value="'. esc_attr__( 'Search' ) .'">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.97222 13.1944C10.4087 13.1944 13.1944 10.4087 13.1944 6.97222C13.1944 3.53578 10.4087 0.75 6.97222 0.75C3.53578 0.75 0.75 3.53578 0.75 6.97222C0.75 10.4087 3.53578 13.1944 6.97222 13.1944Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M14.75 14.7502L11.3667 11.3669" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </form>
         </div>';

	return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );


// Single Post Tag
function single_pos_tag(){
    $single_post_tags = get_the_tags();
?>

     <?php foreach($single_post_tags as $single_post_tag):

        ?>

         <a href="<?php echo esc_url(get_tag_link($single_post_tag->term_id ))?>"><?php echo esc_html($single_post_tag->name );?></a>

    <?php endforeach ;?>

<?php
}