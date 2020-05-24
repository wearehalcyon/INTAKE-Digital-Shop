<?php if (have_rows('slider', 'option')) : ?>
    <section class="owl-carousel owl-theme homepageBanner">
        <?php while(have_rows('slider', 'option')) : the_row(); ?>
            <div class="item slideItem">
                <img class="slideBg" src="<?php the_sub_field('slide_image', 'option'); ?>" alt="<?php the_sub_field('slide_title', 'option'); ?> Background">
                <div class="slideContainer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <h3><?php the_sub_field('slide_title', 'option'); ?></h3>
                                <p><?php the_sub_field('slide_description', 'option'); ?></p>
                                <?php if (get_sub_field('slide_button_url', 'option')) : ?>
                                    <div class="slideButton">
                                        <a class="button" href="<?php the_sub_field('slide_button_url', 'option'); ?>">Get more</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-2">
                            
                            </div>
                            <div class="col-md-5">
                                <div class="slideCover">
                                    <img src="<?php the_sub_field('slide_image', 'option'); ?>" alt="<?php the_sub_field('slide_title', 'option'); ?> Background">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>