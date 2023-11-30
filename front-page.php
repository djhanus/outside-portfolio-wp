<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="home--sandbox">
    <div class="container">
      <div class="featured-wrapper">
        <img src="<?php echo get_field('sandbox'); ?>" alt="">
      </div>
    </div>
  </section>


  <section class="home--portfolio">
    <div class="container">
      <div class="section-title">Work</div>
      <div class="portfolio-wrapper">
        <?php
        $featured_posts = get_field('portfolio');
        if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):
                setup_postdata($post); ?>
                <div class="portfolio-item">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    $image_id = get_post_thumbnail_id();
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); ?>
                    <img src="<?php echo $image_alt; ?>">
                  </a>
                  <div class="caption"><?php the_title(); ?></div>
                </div>
            <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>



  <section class="home--logos">
    <div class="container">
      <?php
      $logos = get_field('logos');
      if( $logos ): ?>
          <div class="section-title">	<?php echo $logos['section_title']; ?></div>
          <img src="<?php echo esc_url( $logos['logos_large'] ); ?>" class="desktop" />
          <img src="<?php echo esc_url( $logos['logos_narrow'] ); ?>" class="mobile" />
      <?php endif; ?>
    </div>
  </section>


  <section class="home--mission">
    <div class="container">
      <div class="text-container">
        <?php echo get_field('mission_statement'); ?>
      </div>
    </div>
  </section>



  <section class="about-us">
    <div class="container">
      <?php
      $aboutus = get_field('about_us');
      if( $aboutus ): ?>
        <div class="col-1">
          <?php echo $aboutus['main_text']; ?>
        </div>
        <div class="col-2">
          <?php echo $aboutus['feature_list']; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>



  <section class="home--sandbox-simple">
    <div class="container">
      <div class="featured-wrapper">
        <?php echo get_field('simple_sandbox'); ?>
      </div>
    </div>
  </section>



<?php endwhile; endif;
  get_footer(); ?>
