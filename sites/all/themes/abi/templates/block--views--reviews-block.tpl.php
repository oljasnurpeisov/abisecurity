<div id="testi" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="container">

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <div class="text-center">
      <h2 class="wow fadeInLeft"><?php print $block->subject ?></h2>
      <div class="title-line wow fadeInRight"></div>
    </div>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="row"<?php print $content_attributes; ?>>
            <?php print $content ?>
  </div> <!-- /.content -->
