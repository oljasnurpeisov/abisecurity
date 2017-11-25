<div id="client">
	<div class="container">
	  <div class="row">
      <div class="col-sm-12 text-center">

      <?php $delay = 0; ?>
      <?php foreach ($rows as $id => $row): ?>
        <div class="wow fadeInUp clientsLogo" data-wow-delay="<?php print $delay;?>s">
          <?php
          print $row;
          $delay += 0.2;
          ?>
        </div>
      <?php endforeach; ?>

      </div>
	  </div>
	</div>
</div>
