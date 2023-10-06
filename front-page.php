<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="home--featured-image">
    <div class="container">
      <div class="featured-wrapper">
      </div>
    </div>
  </section>

  <section class="home--intro">
    <div class="container">
      <p><?php echo get_field('introduction_text'); ?></p>
    </div>
  </section>

  <section class="home--portfolio">
    <div class="container">
      <div class="portfolio-wrapper">
        <!-- <?php if( have_rows('portfolio_preview') ): ?>
        	<?php while( have_rows('portfolio_preview') ): the_row();?>
            <div class="portfolio-item">
              <img src="<?php echo get_sub_field('featured_image'); ?>">
              <div class="caption"><?php echo get_sub_field('caption_title'); ?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?> -->

        <div class="portfolio-item">
          <img src="https://placehold.co/400x400">
          <div class="caption">Title Caption</div>
        </div>

        <div class="portfolio-item">
          <img src="https://placehold.co/600x400">
          <div class="caption">Title Caption</div>
        </div>
        <div class="portfolio-item">
          <img src="https://placehold.co/600x400">
          <div class="caption">Title Caption</div>
        </div>

        <div class="portfolio-item">
          <img src="https://placehold.co/400x400">
          <div class="caption">Title Caption</div>
        </div>


      </div>
    </div>
  </section>

  <section class="about-us">
    <div class="container">

    </div>
  </section>


<?php endwhile; endif;
  get_footer(); ?>
