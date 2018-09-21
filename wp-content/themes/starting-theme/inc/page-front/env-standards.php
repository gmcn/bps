<?php

  $envHeading = get_field('environmental_heading');
  $envCopy = get_field('environmental_main_text');
  $envImg = get_field('env-standardsimg');

 ?>

<a name="corporatefeature"></a>
<div class="container-fluid env-standards">
  <div class="row wow fadeIn">
    <!-- <div class="vert-align wow fadeIn"> -->
      <div class="col-md-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <h4><?php echo $envHeading ?></h4>
        <?php echo $envCopy ?>
      </div>
    <!-- </div> -->
  </div>
</div>

<div class="env-standardsimg" style="background: url(<?php echo $envImg ?>) center top">

</div>
