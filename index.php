<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="page-main-content">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php
      endwhile;

        the_posts_navigation();

      else :

        get_template_part( 'content', 'none' );

      endif; ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>
