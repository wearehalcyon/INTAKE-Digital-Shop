<?php
/**
 * Template name: Home page
 */
get_header();
    get_template_part( 'inc/homepage/latest', 'releases' );
    get_template_part( 'inc/homepage/latest', 'applications' );
    get_template_part( 'inc/homepage/latest-sample', 'packs' );
    get_template_part( 'inc/homepage/latest', 'soundbanks' );
get_footer();