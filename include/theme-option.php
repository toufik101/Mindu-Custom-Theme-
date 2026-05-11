<?php

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'mindu';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Customization Option', 'mindu' ),
        'customizer'           => true,
    );

    Redux::set_section( 
        $opt_name, 
        array(
            'title'  => esc_html__( 'Header Infos', 'mindu' ),
            'id'     => 'header-option',
            'desc'   => esc_html__( 'Header Button and  Top header options.', 'mindu' ),
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'       => 'header-button',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Button Text Change', 'mindu' ),
                    'desc'     => esc_html__( 'Example description.', 'mindu' ),
                    'subtitle' => esc_html__( 'Example subtitle.', 'mindu' ),
                    'default'  => esc_html__('Reade More','mindu'),
                    'hint'     => array(
                        'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                    )
                ),
                array(
                    'id'       => 'header-button-url',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Button URL Change', 'mindu' ),
                    'desc'     => esc_html__( 'Change the Button Url.', 'mindu' ),
                    'subtitle' => esc_html__( 'Click and change the button url.', 'mindu' ),
                ),
                array(
                    'id'       => 'header-top-switcher',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Enable/Disable Top Header', 'mindu' ),
                    'desc'     => esc_html__( 'Toggle the button for enabling/disabling the top header.', 'mindu' ),
                    // 'subtitle' => esc_html__( 'Click and change the button url.', 'mindu' ),
                    'default'  => false,
                ),
                array(
                    'id'       => 'header-right-switcher',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Enable/Disable Button  on Header Right', 'mindu' ),
                    'desc'     => esc_html__( 'Toggle the button for enabling/disabling the header button.', 'mindu' ),
                    // 'subtitle' => esc_html__( 'Click and change the button url.', 'mindu' ),
                    'default'  => false,
                ),

// ! header 3 Number And Email  
                array(
                        'id'       => 'header-3-number',
                        'type'     => 'text', 
                        'url'      => true,
                        'title'    => esc_html__('Header 3 Number', 'mindu'),
                        'desc'     => esc_html__('Enter the phone number for header 3.', 'mindu'),
                        'subtitle' => esc_html__('Provide the phone number for header 3.', 'mindu'),
                        'default'  => esc_html__('+123 456 7890','mindu'),
                    ),
                array(
                        'id'       => 'header-3-email',
                        'type'     => 'text', 
                        'url'      => true,
                        'title'    => esc_html__('Header 3 Email', 'mindu'),
                        'desc'     => esc_html__('Enter the email address for header 3.', 'mindu'),
                        'subtitle' => esc_html__('Provide the email address for header 3.', 'mindu'),
                        'default'  => esc_html__('info@yourdomain.com','mindu'),
                    ),
                 array(
                        'id'       => 'header-3-openinghours',
                        'type'     => 'text', 
                        'url'      => true,
                        'title'    => esc_html__('Header 3 Number', 'mindu'),
                        'desc'     => esc_html__('Enter the opening hours for header 3.', 'mindu'),
                        'subtitle' => esc_html__('Provide the opening hour for header 3.', 'mindu'),
                        'default'  => esc_html__('Open for Learning: Mon - Sat 8.00 - 18.00','mindu'),
                    ),
            )
        ) 
    );

    //!================================= LOGO================

    Redux::set_section( 
        $opt_name, 
        array(
            'title'  => esc_html__( 'Header Logo', 'mindu' ),
            'id'     => 'header-logo-option',
            'desc'   => esc_html__( 'Header Button subsections.', 'mindu' ),
            'icon'   => 'el el-home',
            'fields' => array(
                        array(
                                'id'       => 'header-logo',
                                'type'     => 'media', 
                                'url'      => true,
                                'title'    => esc_html__('Media w/ URL', 'mindu'),
                                'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'mindu'),
                                'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'mindu'),
                                'default'  => array(
                                    'url'=> get_template_directory_uri()."/assets/img/logo/logo.png"
                                ),
                            ),
                        array(
                                'id'       => 'header-logo-white',
                                'type'     => 'media', 
                                'url'      => true,
                                'title'    => esc_html__('Media w/ URL', 'mindu'),
                                'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'mindu'),
                                'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'mindu'),
                                'default'  => array(
                                    'url'=> get_template_directory_uri()."/assets/img/logo/logo-white.png"
                                ),
                            ),
            )
        ) 
    );

     //!================================= Offcanvas================

    Redux::set_section( 
        $opt_name, 
        array(
            'title'  => esc_html__( 'Offcanvas', 'mindu' ),
            'id'     => 'offcanvas-option',
            'desc'   => esc_html__( 'Offcanvas subsections.', 'mindu' ),
            'icon'   => 'el el-home',
            'fields' => array(
                        array(
                                'id'       => 'offcanvas-description',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Description', 'mindu'),
                                'desc'     => esc_html__('Enter the description for the offcanvas.', 'mindu'),
                                'subtitle' => esc_html__('Provide a brief description for the offcanvas section.', 'mindu'),
                                'default'  => esc_html__('Lorem ipsum dolor sit amet, consect etur adipiscing elit.','mindu'),
                            ),
                         array(
                                'id'       => 'offcanvas-gallery',
                                'type'     => 'gallery', 
                                'title'    => esc_html__('Offcanvas Gallery', 'mindu'),
                                'desc'     => esc_html__('Upload images for the offcanvas gallery.', 'mindu'),
                                'subtitle' => esc_html__('Provide images for the offcanvas section.', 'mindu'),
                            ),
                        array(
                                'id'       => 'offcanvas-phone',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Phone', 'mindu'),
                                'desc'     => esc_html__('Enter the phone number for the offcanvas.', 'mindu'),
                                'subtitle' => esc_html__('Provide a phone number for the offcanvas section.', 'mindu'),
                                'default'  => esc_html__('+ 4 20 7700 1007','mindu'),
                            ),
                        array(
                                'id'       => 'offcanvas-email',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Email', 'mindu'),
                                'desc'     => esc_html__('Enter the email address for the offcanvas.', 'mindu'),
                                'subtitle' => esc_html__('Provide an email address for the offcanvas section.', 'mindu'),
                                'default'  => esc_html__('hello@mindu.com','mindu'),
                            ),
                        array(
                                'id'       => 'offcanvas-address',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Address', 'mindu'),
                                'desc'     => esc_html__('Enter the address for the offcanvas.', 'mindu'),
                                'subtitle' => esc_html__('Provide an address for the offcanvas section.', 'mindu'),
                                'default'  => esc_html__('Avenue de Roma 158b, Lisboa','mindu'),
                            ),  
                        array(
                                'id'       => 'offcanvas-address-url',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Address URL', 'mindu'),
                                'desc'     => esc_html__('Enter the URL for the offcanvas address.', 'mindu'),
                                'subtitle' => esc_html__('Provide a URL for the offcanvas address section.', 'mindu'),
                                'default'  => esc_html__('#','mindu'),
                            ),  

//Offcanvas Logo 
                        array(
                                'id'       => 'offcanvas-fb-url',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Facebook URL', 'mindu'),
                                'desc'     => esc_html__('Enter the URL for the offcanvas Facebook.', 'mindu'),
                                'subtitle' => esc_html__('Provide a URL for the offcanvas Facebook Icon.', 'mindu'),
                                'default'  => esc_html__('#','mindu'),
                            ),
                        array(
                                'id'       => 'offcanvas-x-url',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas X URL', 'mindu'),
                                'desc'     => esc_html__('Enter the URL for the offcanvas X.', 'mindu'),
                                'subtitle' => esc_html__('Provide a URL for the offcanvas X Icon.', 'mindu'),
                                'default'  => esc_html__('#','mindu'),
                            ),
                        array(
                                'id'       => 'offcanvas-dr-url',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Drible URL', 'mindu'),
                                'desc'     => esc_html__('Enter the URL for the offcanvas Drible.', 'mindu'),
                                'subtitle' => esc_html__('Provide a URL for the offcanvas Drible Icon.', 'mindu'),
                                'default'  => esc_html__('#','mindu'),
                            ), 
                        array(
                                'id'       => 'offcanvas-Ir-url',
                                'type'     => 'text', 
                                'title'    => esc_html__('Offcanvas Instagram URL', 'mindu'),
                                'desc'     => esc_html__('Enter the URL for the offcanvas Instagram.', 'mindu'),
                                'subtitle' => esc_html__('Provide a URL for the offcanvas Instagram Icon.', 'mindu'),
                                'default'  => esc_html__('#','mindu'),
                            ),  
            )
        ) 
    );