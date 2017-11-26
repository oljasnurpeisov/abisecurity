<div id="feature" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="container">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">
            <h2><?php print $block->subject ?></h2>
            <p>Мы оказываем услуги по охране объектов клиента от противоправных действий третьих лиц следующим способами</p>
          </div>
      </div>
    <?php endif;?>
    <?php print render($title_suffix); ?>

    <div class="row row-feat">
      <div class="col-md-4 text-center">

          <!-- /.feature image -->
          <div class="feature-img">
              <img src="<?php print path_to_theme(); ?>/images/iphone.jpg" alt="" class="img-responsive wow fadeInLeft">
          </div>
      </div>
              <?php print $content ?>
    </div> <!-- /.content -->
  </div>
</div>
