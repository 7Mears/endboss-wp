<?php

get_header(); ?>

<section id="hero">
  <div class="hero-section wrap">
    <h1>End Boss Creative Collective</h1>
    <h3>A collection of artists, developers, and writers.</h3>
  </div>
</section><!-- /hero -->

<section id="about">
  <div class="about-section wrap">
    <h2>About</h2>
  </div>
</section><!-- /about -->

<section id="portfolio">
  <div class="portfolio-section wrap">
    <h2>Portfolio</h2>
    <?php include( get_template_directory() . '/portfolio-featured.php' ); ?>
  </div>
</section><!-- /portfolio -->

<section id="members">
  <div class="members-section wrap">
    <h2>Members</h2>
  </div>
</section><!-- /members -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
