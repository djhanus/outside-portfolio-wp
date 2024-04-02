<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="home--sandbox">
    <div class="container">
      <div class="featured-wrapper">

        <img src="<?php echo get_field('sandbox'); ?>" alt="">

        <img src="<?php echo get_field('sandbox_mobile'); ?>" alt="" class="mobile">

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
                  <!-- <a href="<?php the_permalink(); ?>"> -->
                    <?php $thumbnailID = get_post_thumbnail_id(get_the_ID());
                    $altText = get_post_meta($thumbnailID , '_wp_attachment_image_alt', true); ?>
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $altText; ?>">
                  <!-- </a> -->
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
        <?php if( have_rows('slider_bottom') ): ?>
        <div class="slick-slider">
            <?php while( have_rows('slider_bottom') ): the_row(); ?>
                <div><img src="<?php echo get_sub_field('image'); ?>" /></div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
  </section>


<?php endwhile; endif;
  get_footer(); ?>
