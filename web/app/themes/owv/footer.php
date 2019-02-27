    <footer class="text-center">
      <div class="container p-5">
        <?php if ( have_rows( 'social', 'options' ) ) : ?>
          <div class="row social">
            <div class="col mb-3">
              <?php while ( have_rows( 'social', 'options' ) ) : the_row(); ?>
                <a href="<?php the_sub_field( 'link' ); ?>" target="_blank"><i class="fab <?php the_sub_field( 'icon' ); ?>"></i></a>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( get_field( 'disclaimer', 'options' ) ) : ?>
          <div class="row disclaimer">
            <div class="col">
              <div class="box">
								<?php the_field( 'disclaimer', 'options' ); ?>
							</div>
            </div>
          </div>
        <?php endif; ?>
				<div class="row c4">
					<div class="col">
						Our Western Values is a 501(c)(4) organization and donations are not tax deductible.
					</div>
				</div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>