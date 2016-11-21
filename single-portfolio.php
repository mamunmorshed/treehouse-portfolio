<?php get_header(); ?>

    <section class="row">
      <div class="small-12 columns text-center">
        <div class="leader">


          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>        


        </div>
      </div>
    </section>


    <section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
        
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        
          <div class="small-12 medium-4 columns">
            <div class="secondary">
              <h2><?php the_title(); ?></h2>
              
              <p><?php the_field('portfolio_description') ?></p>

              <hr>

              <p>
                <?php previous_post_link(); ?>
                 <br>| <a href="<?php bloginfo( 'url' ).'/portfolio'; ?>">Back To Portfolio</a> |<br>
                <?php next_post_link(); ?>
              </p>

            </div>
          </div>

          <div class="small-12 medium-7 medium-offset-1 end columns">
            <div class="primary">
              <?php the_field('portfolio_images') ?>
            </div>
          </div>
        
        <?php endwhile; endif; ?>
        
        </div>
      </div>

    </section>


<?php get_footer(); ?>