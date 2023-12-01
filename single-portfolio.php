<?php get_header('short');
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="single-post">
      <div class="container">

        <div class="portfolio-container">
          <?php if( have_rows('selected_images') ): ?>
          	<?php while( have_rows('selected_images') ): the_row();?>
        			<?php $acf_image_array = get_sub_field('image');
        			$url = $acf_image_array['url'];
        			$alt = ($acf_image_array['alt']?$acf_image_array['alt']:$acf_image_array['title']); ?>
        			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
          	<?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="post-content">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>

      </div>
    </section>

  <?php endwhile; endif; get_footer(); ?>
