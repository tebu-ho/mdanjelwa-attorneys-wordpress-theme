<?php get_header(); ?>
        <section id="contact" class="section section-center section-contact">
          <div class="container">
              <div class="row">
                <?php
                    while ( have_posts() ):
                        the_post();
                ?>
                  <div class="col-md-12">
                      <div class="col-md-6">
                      <h2 class="section-title"><?php the_title(); ?></h2>
                      <?php the_content(); ?>
                  </div>
                  </div>
                      <form method="post" action="assets/form/contact.php" name="contactform" id="contactform" class="col-md-12">
                          <div class="results"></div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label class="sr-only"><?php the_field( 'name_label' ); ?></label>
                                  <input id="name" name="name" type="text" class="form-control" placeholder="<?php the_field( 'name_label' ); ?>" required>
                              </div>
                              <div class="form-group">
                                  <label class="sr-only"><?php the_field( 'email_label' ); ?></label>
                                  <input id="email"name="email" type="text" class="form-control" placeholder="<?php the_field( 'email_label' ); ?>" required>
                              </div>
                              <div class="form-group">
                                  <label class="sr-only"><?php the_field( 'phone_label' ); ?></label>
                                  <input id="phone"name="phone" type="tel" class="form-control" placeholder="<?php the_field( 'phone_label' ); ?>" required>
                              </div>
                              <div class="form-group">
                                  <label class="sr-only"><?php the_field( 'message_label' ); ?></label>
                                  <textarea id="message"name="message" class="form-control" placeholder="<?php the_field( 'message_label' ); ?>" style="height: 181px" rows="6" required></textarea>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-3 col-sm-3 col-xs-12" style="padding:0">
                                      <button id="submit" type="submit" class="btn btn-danger btn-block"><?php the_field( 'button_label' ); ?></button>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                          </div>
                      </form>
                    <?php endwhile; ?>
              </div>
            </div>
        </section>
<?php get_footer(); ?>