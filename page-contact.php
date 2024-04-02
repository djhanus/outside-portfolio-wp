<?php

/* Template Name: Contact */

get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="page--default contact">
    <div class="container">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </section>


<?php endwhile; endif;
  get_footer(); ?>
