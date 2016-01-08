<?php

$color_locations = array(

    'sections' => array(

        'General' => array(
            'Background' => array(
                'selector' => 'body',
                'attribute' => 'background-color',
                'default' => '#e7e7e7',
            ),
        ),

        'Header' => array(
            'Background' => array(
                'selector' => '.site-header',
                'attribute' => 'background-color',
                'default' => '#fff',
            ),
            'Site Title' => array(
                'selector' => '.site-header .site-title a',
                'attribute' => 'color',
                'default' => '#000',
            ),
            'Site Description' => array(
                'selector' => '.site-header .site-description',
                'attribute' => 'color',
                'default' => '#777',
            ),
        ),

        'Navigation' => array(
            'Background' => array(
                'selector' => '.main-navigation-container, .main-navigation li.menu-item-has-children:hover > ul',
                'attribute' => 'background-color',
                'default' => '#222',
            ),
            'Link Text' => array(
                'selector' => '.main-navigation-container li > a',
                'attribute' => 'color',
                'default' => '#c8c8c8',
            ),
            'Hover Link Text' => array(
                'selector' => '.main-navigation-container li:hover > a, .main-navigation-container li:focus > a',
                'attribute' => 'color',
                'default' => '#fff',
            ),
            'Hover Link Background' => array(
                'selector' => '.main-navigation-container li:hover > a, .main-navigation-container li:focus > a',
                'attribute' => 'background-color',
                'default' => '#3c3c3c',
            ),
            'Active Link Text' => array(
                'selector' => '.main-navigation-container li.current_page_item > a',
                'attribute' => 'color',
                'default' => '#777',
            ),
            'Active Link Background' => array(
                'selector' => '.main-navigation-container li.current_page_item > a',
                'attribute' => 'background-color',
                'default' => '#777',
            ),
        ),

        'Content' => array(
            'Background' => array(
                'selector' => '.hentry',
                'attribute' => 'background-color',
                'default' => '#fff',
            ),
            'Page Title Color' => array(
                'selector' => '.content-area .entry-title, .content-area .entry-title a',
                'attribute' => 'color',
                'default' => '#222',
            ),
            'Text Color' => array(
                'selector' => '.hentry',
                'attribute' => 'color',
                'default' => '#444',
            ),
            'Link Color' => array(
                'selector' => '.content-area a',
                'attribute' => 'color',
                'default' => '#e91f2e',
            ),
            'Link Hover Color' => array(
                'selector' => '.content-area a:hover, .content-area a:focus',
                'attribute' => 'color',
                'default' => '#c21322',
            ),
        ),

        'Comments' => array(
            'Background' => array(
                'selector' => '.comments-area',
                'attribute' => 'background-color',
                'default' => '#fff',
            ),
            'Text Color' => array(
                'selector' => '.comments-area, .comments-title, .comment-reply-title, .form-allowed-tags, .form-allowed-tags abbr, .form-allowed-tags code',
                'attribute' => 'color',
                'default' => '#444',
            ),
            'Link Color' => array(
                'selector' => '.comments-area a',
                'attribute' => 'color',
                'default' => '#e91f2e',
            ),
            'Link Hover Color' => array(
                'selector' => '.comments-area a:hover, .comments-area a:focus',
                'attribute' => 'color',
                'default' => '#c21322',
            ),
            'Button Background' => array(
                'selector' => '.comments-area input[type="submit"]',
                'attribute' => 'background-color',
                'default' => '#e91f2e',
            ),
            'Button Background Hover' => array(
                'selector' => '.comments-area input[type="submit"]:hover',
                'attribute' => 'background-color',
                'default' => '#c21322',
            ),
            'Button Text' => array(
                'selector' => '.comments-area input[type="submit"]',
                'attribute' => 'color',
                'default' => '#fff',
            ),
            'Button Text Hover' => array(
                'selector' => '.comments-area input[type="submit"]:hover',
                'attribute' => 'color',
                'default' => '#fff',
            ),
        ),

        'Sidebar' => array(
            'Background' => array(
                'selector' => '#secondary .widget, #tertiary .widget',
                'attribute' => 'background-color',
                'default' => '#fff',
            ),
            'Title Color' => array(
                'selector' => '#secondary .widget-title, #tertiary .widget-title',
                'attribute' => 'color',
                'default' => '#222',
            ),
            'Text Color' => array(
                'selector' => '#secondary, #secondary abbr, #tertiary, #tertiary abbr',
                'attribute' => 'color',
                'default' => '#444',
            ),
            'List Divider' => array(
                'selector' => '#secondary .widget li, #tertiary .widget li',
                'attribute' => 'border-bottom-color',
                'default' => '#e7e7e7',
            ),
            'Link Color' => array(
                'selector' => '#secondary a, #tertiary a',
                'attribute' => 'color',
                'default' => '#e91f2e',
            ),
            'Link Hover Color' => array(
                'selector' => '#secondary a:hover, #secondary a:focus, #tertiary a:hover, #tertiary a:focus',
                'attribute' => 'color',
                'default' => '#c21322',
            ),
        ),

        'Footer' => array(
            'Background' => array(
                'selector' => '.site-info-wrapper',
                'attribute' => 'background-color',
                'default' => '#fff',
            ),
            'Text Color' => array(
                'selector' => '.site-info-wrapper',
                'attribute' => 'color',
                'default' => '#222',
            ),
            'Link Color' => array(
                'selector' => '.site-info-wrapper a',
                'attribute' => 'color',
                'default' => '#222',
            ),
            'Link Hover Color' => array(
                'selector' => '.site-info-wrapper a:hover, .site-info-wrapper a:focus',
                'attribute' => 'color',
                'default' => '#222',
            ),
            'Social Link Icon' => array(
                'selector' => '.site-info-wrapper .site-info .social-menu a',
                'attribute' => 'color',
                'default' => '#fff',
            ),
            'Social Link Icon Hover' => array(
                'selector' => '.site-info-wrapper .site-info .social-menu a:hover, .site-info-wrapper .site-info .social-menu a:focus',
                'attribute' => 'color',
                'default' => '#fff',
            ),
            'Social Link Background' => array(
                'selector' => '.site-info-wrapper .site-info .social-menu a',
                'attribute' => 'background-color',
                'default' => '#222',
            ),
            'Social Link Background Hover' => array(
                'selector' => '.site-info-wrapper .site-info .social-menu a:hover, .site-info-wrapper .site-info .social-menu a:focus',
                'attribute' => 'background-color',
                'default' => '#e91f2e',
            ),
        ),

    ),

    'palettes' => array(

        'Default' => array(

            'Sidebar' => array(
                'Background Color' => '#FFFFFF',
                'Text Color' => '#333333',
                'Link Color' => '#333333',
                'Link Hover Color' => '#707070',
            ),

            'Content' => array(
                'Background Color' => '#FFFFFF',
                'Text Color' => '#333333',
                'Link Color' => '#333333',
                'Link Hover Color' => '#707070',
            ),

        ),

        'Dreamy' => array(

            // 'General' => array(
            //     'Background' => '#fff',
            // ),

            'Header' => array(
                'Background' => '#89bdd3',
                'Site Title' => '#fff',
                'Site Description' => '#fff'
            ),

            'Navigation' => array(
                'Background' => '#222',
                'Link Text' => '#fff'
            ),

            'Content' => array(
                'Background Color' => '#e3e3e3',
                'Text Color' => '#222',
                'Link Color' => '#9ad3de',
                'Link Hover Color' => '#89bdd3',
            ),

            'Comments' => array(
                'Button Background' => '#9ad3de',
                'Button Background Hover' => '#89bdd3',
                'Button Text' => '#fff',
                'Button Text Hover' => '#fff',
            ),

            'Footer' => array(
                'Background' => '#89bdd3',
                'Text Color' => '#fff',
                'Link Color' => '#fff',
                'Link Hover Color' => '#fff',
                'Social Link Background' => '#222',
                'Social Link Background Hover' => '#fff',
                'Social Link Icon' => '#fff',
                'Social Link Icon Hover' => '#222'
            ),

        ),

        'Aquatic' => array(

            'Sidebar' => array(
                'Background Color' => 'fae596',
                'Text Color' => '#173e43',
                'Link Color' => '#3fb0ac',
                'Link Hover Color' => '#fae596',
            ),

            'Content' => array(
                'Background Color' => '#dddfd4',
                'Text Color' => '#173e43',
                'Link Color' => '#3fb0ac',
                'Link Hover Color' => '#fae596',
            ),

        ),

        'Humanity' => array(

            'Sidebar' => array(
                'Background Color' => '#ede9ce',
                'Text Color' => '#64706c',
                'Link Color' => '#935347',
                'Link Hover Color' => '#c7ad88',
            ),

            'Content' => array(
                'Background Color' => '#ede9ce',
                'Text Color' => '#64706c',
                'Link Color' => '#935347',
                'Link Hover Color' => '#c7ad88',
            ),

        ),

        'Wood Grain' => array(

            'Sidebar' => array(
                'Background Color' => '#feffff',
                'Text Color' => '#312c32',
                'Link Color' => '#daad86',
                'Link Hover Color' => '#98dafc',
            ),

            'Content' => array(
                'Background Color' => '#feffff',
                'Text Color' => '#312c32',
                'Link Color' => '#daad86',
                'Link Hover Color' => '#98dafc',
            ),

        ),

    ),

);

add_theme_support( 'colorcase', $color_locations );
