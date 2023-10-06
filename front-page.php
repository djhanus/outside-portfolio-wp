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
      <div class="feature-container">

      </div>

      <div class="text-container">
        <?php echo get_field('introduction_text'); ?>
      </div>
    </div>
  </section>

  <section class="home--portfolio">
    <div class="container">
      <div class="portfolio-wrapper">
        <?php if( have_rows('portfolio_preview') ): ?>
        	<?php while( have_rows('portfolio_preview') ): the_row();?>
            <div class="portfolio-item">
              <img src="<?php echo get_sub_field('featured_image'); ?>">
              <div class="caption"><?php echo get_sub_field('caption_title'); ?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <section class="about-us">
    <div class="container">
      <div class="col-1">
        <p>Sed vitae sem gravida, faucibus lorem in, vulputate nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse dolor sapien, volutpat sed volutpat eu, interdum sed orci.</p>

        <p>vel facilisis turpis orci ut elit. Proin enim urna, lobortis et congue consequat, bibendum ut turpis. Nullam tempus mauris magna, in vehicula tortor efficitur at. Fusce ut massa in lectus vestibulum.</p>
      </div>
      <div class="col-2">
        <p>What we do:</p>
        <ul>
          <li>list item</li>
          <li>list item</li>
          <li>list item</li>
          <li>list item</li>
        </ul>

      </div>

    </div>
  </section>


<?php endwhile; endif;
  get_footer(); ?>
