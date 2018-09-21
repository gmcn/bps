<?php

  $strategicHeading = get_field('strategic_location_heading');
  $strategicCopy = get_field('strategic_location_copy');
  $strategicImg = get_field('strategic_location_img');

 ?>


<div class="container strategic_location">
  <div class="row">

    <div class="col-md-6 matchheight wow fadeInLeft">
      <h5 class="hidden-md hidden-lg"><?php echo $strategicHeading ?></h5>
      <img src="<?php echo $strategicImg ?>" alt="<?php echo $strategicHeading ?>">
    </div>

    <div class="col-md-6 matchheight wow fadeInRight">
      <div class="vert-align">
        <h5 class="hidden-xs hidden-sm"><?php echo $strategicHeading ?></h5>
        <?php echo $strategicCopy ?>
      </div>
    </div>
  </div>
</div>
