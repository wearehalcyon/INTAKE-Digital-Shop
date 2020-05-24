<?php
    $args = [
        'post_type' => 'product',
        'posts_per_page' => 8,
        'tax_query' => [
            [
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'soundbanks'
            ]
        ]
    ];
    $query = new WP_Query($args);
    if ( $query->have_posts() ) :
        ?>
        <section class="latestReleases">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="sectionTitle"><?php echo _e('Soundbanks', 'intake-digital-shop') ?></h2>
                    </div>
                </div>
                <div class="lpList">
                    <div class="row">
                        <?php
                            while ( $query->have_posts() ) : $query->the_post();
                        ?>
                            <div class="col-md-3 col-xs-6 col-sm-6">
                                <div class="productItem product-id-<?php echo get_the_ID(); ?>">
                                    <img class="product_item_background" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> Product Item Background">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="productImage">
                                            <img class="productCover" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        </div>
                                        <span class="productName">
                                            <?php the_title(); ?>
                                        </span>
                                        <span class="productTitle">
                                            <?php the_field('product_subtitle'); ?>
                                        </span>
                                    </a>
                                    <div class="product_actions">
                                        <div class="product_action preview">
                                            <a href="<?php the_permalink(); ?>">
                                                <i class="fas fa-play"></i>View Item
                                            </a>
                                        </div>
                                        <div class="product_action buy">
                                            <a href="<?php echo home_url('/cart/?add-to-cart=' . get_the_ID()); ?>">
                                                Buy<i class="fas fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>