<footer>
  <div class="container">

    <div class="logo-container">
      <?php bloginfo('name'); ?>
      <div class="year">
        <?php echo get_field('year', 'options'); ?>
      </div>
      <div class="location">
        <?php echo get_field('location', 'options'); ?>
      </div>
    </div>

    <div class="links-container">
      <ul>
        <li><a href="#">link 1</a></li>
        <li><a href="#">link 2</a></li>
      </ul>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
