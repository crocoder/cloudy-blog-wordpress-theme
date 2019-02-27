<?php
/**
 * The template for displaying the footer
 */
?>

</div><!-- .site-content -->

<footer class="site-footer">
  <div class="site-footer__inner container">
    <nav class="navigation navigation--secondary">
      <?php wp_nav_menu( array(
        'theme_location' => 'footer-menu',
      ) ); ?>
    </nav>
    <div class="site-info"><span>Theme: Cloudy-Blog by <a href="https://crocoder.pl" target="_blank" rel="noopener noreferrer">CroCoder</a> and <a href="https://www.behance.net/barrud" target="_blank" rel="noopener noreferrer">BarRud</a></span></div>
  </div>
</footer>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>