<?php get_header(); ?>

  <?php get_template_part( 'templates/_partials/nav' ); ?>

  <div class="container">
    <div class="row">
      <div class="col">

        <?php if ( have_posts() ): ?>
          <?php while ( have_posts() ): ?>

            <?php the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="content">
              <?php if ( is_archive() ): ?>
                <?php the_excerpt(); ?>
              <?php else: ?>
                <?php the_content(); ?>
              <?php endif; ?>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>