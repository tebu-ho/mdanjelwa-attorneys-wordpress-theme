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
                <div class="col-md-6">
                    <?php
                        $icon = new fontAwesomeIcons(); //Instatiating fontAwesomeIcons
                        $query = new WP_Query(
                            array(
                                'post_type'      => 'imibuzo',
                                'posts_per_page' => 3,
                                'order'          => 'ASC',
                            )
                        );
                        if ( $query->have_posts() ):
                            while ( $query->have_posts() ):
                                $query->the_post();
                    ?>
                    <div class="col-md-12 col-sm-6">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                    <?php
                        endwhile;
                            endif;
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        $icon = new fontAwesomeIcons();
                        $query = new WP_Query(
                            array(
                                'post_type'      => 'imibuzo',
                                'posts_per_page' => 3,
                                'post__in'       => array(88, 89, 90),
                                'order'          => 'ASC',
                            )
                        );
                        if ( $query->have_posts() ):
                            while ( $query->have_posts() ):
                                $query->the_post();
                    ?>
                    <div class="col-md-12 col-sm-6">
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