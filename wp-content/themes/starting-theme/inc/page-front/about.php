<?php

  $aboutHeading = get_field('about_heading');
  $aboutCopy = get_field('about_copy');
  $aboutImg = get_field('about_img');

 ?>

<a name="about"></a>
<div class="container-fluid about">

  <div class="row">
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
      <h2><?php echo $aboutHeading ?></h2>
      <?php echo $aboutCopy ?>
    </div>
  </div>

  <!-- <div class="vert-align wow fadeIn"> -->

  <!-- </div> -->

</div>

<div class="aboutimg" style="background-image: url(<?php echo $aboutImg ?>)">

</div>
