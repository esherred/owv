<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  <?php 
    the_post();
    if ( !get_the_post_thumbnail_url() ) {
      $thumbnail = get_field( 'default_background', 'options' );
    } else {
      $thumbnail = get_the_post_thumbnail_url();
    }
  ?>

  <div class="background pb-5" style="background-image: url(<?php echo $thumbnail; ?>)">
    
    <?php get_template_part( 'templates/_partials/nav' ); ?>
    
    <main class="container p-3">
      

      <div class="row">
        <div class="col">
          
          <?php the_content(); ?>

        </div>
      </div>
    </main>

  </div>

<?php get_footer(); ?>