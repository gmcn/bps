<?php

  $strategicHeading = get_field('strategic_location_heading');
  $strategicCopy = get_field('strategic_location_copy');
  $strategicImg = get_field('strategic_location_img');

 ?>


<div class="container strategic_location">
  <div class="vert-align wow fadeIn">
    <div class="row">

      <div class="col-md-5">
        <img src="<?php echo $strategicImg ?>" alt="<?php echo $strategicHeading ?>">
      </div>

      <div class="col-md-7">
        <h5><?php echo $strategicHeading ?></h5>
        <?php echo $strategicCopy ?>
      </div>
    </div>
  </div>
</div>
