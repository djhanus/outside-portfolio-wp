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
      <?php if( have_rows('links', 'options') ): ?>
        <ul>
      	<?php while( have_rows('links', 'options') ): the_row();?>
          <?php
          $link = get_sub_field('link');
          if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
          <?php endif; ?>
      	<?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
</body>
</html>
