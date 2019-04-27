<?php get_header(); ?>
    <section id="features" class="section section-center section-hilite section-features">
        <div class="container">
            <div class="row">
                <?php
                    while ( have_posts() ):
                        the_post();
                ?>
                <div class="col-md-12 services--intro">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
                <div class="col-md-12">
                    <?php
                        $icon = new fontAwesomeIcons();
                        $query = new WP_Query(
                            array(
                                'post_type' => 'service',
                                'post_per_page' => -1,
                                'order' => 'ASC',
                            )
                        );
                        if ( $query->have_posts() ):
                            while ( $query->have_posts() ):
                                $query->the_post();
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="icon-wrap"><i class="<?php $icon->displayIcon(); ?>"></i></div>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                    <?php
                        endwhile;
                            endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>