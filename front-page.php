<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="home--sandbox">
    <div class="container">
      <div class="featured-wrapper">
        sandbox
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/temp/logos.png" alt="">
    </div>
  </section>



  <section class="home--mission">
    <div class="container">
      <div class="featured-wrapper">
        <p>Sed vitae sem gravida, faucibus lorem in, vulputate nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse dolor sapien, volutpat sed volutpat eu, interdum sed orci.</p>
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



  <section class="home--sandbox-simple">
    <div class="container">
      <div class="featured-wrapper">
        sandbox simple
      </div>
    </div>
  </section>



<?php endwhile; endif;
  get_footer(); ?>
