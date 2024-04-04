<?php /* Template Name: Two-Column */ ?>
<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="page--two-column">
    <div class="container">
      <div class="featured-image">
          <?php $thumbnail = the_post_thumbnail();
          if( $thumbnail ) : ?>
              <?php echo $thumbnail; ?>
          <?php endif; ?>
      </div>

      <div class="content">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
      </div>

    </div>
  </section>

<?php endwhile; endif;
  get_footer(); ?>
