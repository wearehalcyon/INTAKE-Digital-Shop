<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package INTAKE_Digital_Shop
 */

?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6 col-sm-6">
                <div class="footerNav">
                    <h4>
                        <?php
                            $menu_location = get_nav_menu_locations();
                            $menu_obgect = wp_get_nav_menu_object($menu_location['footer-1']);
                            echo $menu_obgect->name;
                        ?>
                    </h4>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-1'
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <div class="footerNav">
                    <h4>
                        <?php
                            $menu_location = get_nav_menu_locations();
                            $menu_obgect = wp_get_nav_menu_object($menu_location['footer-2']);
                            echo $menu_obgect->name;
                        ?>
                    </h4>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-2'
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
                <div class="footerNav">
                    <h4>
                        <?php
                            $menu_location = get_nav_menu_locations();
                            $menu_obgect = wp_get_nav_menu_object($menu_location['footer-3']);
                            echo $menu_obgect->name;
                        ?>
                    </h4>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-3'
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-12">
                <div class="footerEnd">
                    <div class="buyIPE">
                        <a href="<?php echo home_url('/get-ipe/'); ?>">Get Promopool Engine</a>
                    </div>
                    <div class="socialLinks">

                    </div>
                    <div class="powered">
                        Powered by WebTek Engine
                        <p>All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footerRow">
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">
                <div class="footerLogo">

                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">
                <div class="copyright">
                    Copyright by <?php bloginfo('name'); ?> &copy <?php echo date('Y'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
<?php wp_footer(); ?>
</html>
