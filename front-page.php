<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="home--intro">
    <div class="container">

      <p>Proin mi nulla, porta accumsan lacus at, consectetur sagittis urna. Etiam euismod sodales dapibus. Aliquam facilisis ante lacus, eget tristique erat dignissim non. Pellentesque justo leo, ultrices laoreet ligula sed, posuere tincidunt nulla. Cras lacinia pulvinar feugiat. Donec lobortis leo et tempus cursus. Duis id placerat ex. Morbi consectetur pellentesque tristique. Curabitur in lacus vitae ante aliquam interdum. Sed tristique gravida nisl, ac mollis metus suscipit quis. Nullam a vehicula leo. Aliquam faucibus mi nec consequat vehicula.</p>

    </div>
  </section>

  <section class="home--portfolio">
    <div class="container">

      <div class="portfolio-wrapper">
        <div class="portfolio-item"></div>
        <div class="portfolio-item"></div>
        <div class="portfolio-item"></div>
        <div class="portfolio-item"></div>
      </div>

    </div>
  </section>


  <?php get_template_part('templates/flex'); ?>

<?php endwhile; endif;
  get_footer(); ?>
