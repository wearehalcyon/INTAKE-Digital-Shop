<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package INTAKE_Digital_Shop
 */

?>
    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
    <header class="header<?php if (is_front_page()) { echo ' home'; } ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-md-7 hidden-xs hidden-sm">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_class' => 'navigation',
                                'menu_id' => 'main_nav'
                            )
                        );
                    ?>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm">
                    <ul class="navigation accountNav">
                        <?php if ( !is_user_logged_in() ) { ?>
                            <li>
                                <a href="<?php echo home_url('/signin/'); ?>">Sign In</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/signup/'); ?>">Create Account</a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo home_url('/my-account/'); ?>">Shop Account</a>
                            </li>
                            <li>
                                <a href="<?php echo wp_logout_url( home_url('/') ); ?>">Logout</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <?php
        if ( is_front_page() ) {
            get_template_part( 'inc/homepage/home', 'slider' );
        }
    ?>