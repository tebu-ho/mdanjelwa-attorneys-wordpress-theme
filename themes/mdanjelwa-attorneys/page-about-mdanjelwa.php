<?php get_header(); ?>
    <section id="team" class="section section-center section-hilite section-team">
        <div class="container">
            <div class="row">
                <?php
                    while ( have_posts() ) {
                        the_post();
                ?>
                <div class="col-md-6">
                    <h2 class="section-title"><span><?php the_title(); ?></span></h2>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 col-sm-12">
                        <img src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>