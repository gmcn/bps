<?php

  $envHeading = get_field('environmental_heading');
  $envCopy = get_field('environmental_main_text');
  $envImg = get_field('env-standardsimg');

 ?>

<a name="corporatefeature"></a>
<div class="container-fluid env-standards">
  <div class="row">
    <div class="vert-align wow fadeIn">
      <div class="col-md-7 col-md-offset-3">
        <h4><?php echo $envHeading ?></h4>
        <?php echo $envCopy ?>
      </div>
    </div>
  </div>
</div>

<div class="env-standardsimg" style="background-image: url(<?php echo $envImg ?>)">

</div>
