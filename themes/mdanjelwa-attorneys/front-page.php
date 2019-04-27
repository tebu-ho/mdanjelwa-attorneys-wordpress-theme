<?php get_header(); ?>
  <section id="features" class="section section-center section-hilite section-features">
    <div class="container">
      <div class="row">
        <?php
          $icon = new fontAwesomeIcons();
          while ( have_posts() ):
            the_post();
        ?>
        <div class="col-md-7">
          <h2 class="section-title"><?php the_field( 'welcome_heading' ); ?></h2>
          <?php the_content(); ?>
        </div>
        <div class="col-md-12">
          <!-- Looping the homepage sections -->
          <?php
            $query = new WP_Query(
              array(
                'post_type'     => 'section',
                'post_per_page' => 3,
                'order'         => 'ASC',
              )
            );
            $learn_more_link = new LearnMoreLinks();
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
          ?>
          <div class="col-md-4 col-sm-6 hilite-features mb-1">
            <div class="icon-wrap"><i class="<?php $icon->displayIcon(); ?>"></i></div>
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
            <a href="<?php $learn_more_link->addLink() ; ?>"><?php the_field( 'learn_more' ); ?> &nbsp;<i class="fa fa-chevron-circle-right"></i></a>
          </div>
          <?php
              } 
            }
          ?>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>