<?php

  $aboutHeading = get_field('about_heading');
  $aboutCopy = get_field('about_copy');
  $aboutImg = get_field('about_img');

 ?>

<a name="about"></a>
<div class="about">

  <div class="vert-align wow fadeIn">
    <div class="col-md-7 col-md-offset-3">
      <h2><?php echo $aboutHeading ?></h2>
      <?php echo $aboutCopy ?>
    </div>
  </div>

</div>

<div class="aboutimg" style="background-image: url(<?php echo $aboutImg ?>)">

</div>
