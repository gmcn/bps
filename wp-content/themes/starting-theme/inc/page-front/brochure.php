<?php

  $brochureHeading = get_field('brochure_heading');
  $brochureCoverImg = get_field('brochure_cover_img');
  $brochureLink = get_field('brochure_link');
  $afterBrochureImg = get_field('after_brochure_img');

 ?>

<a name="brochure"></a>
<div class="container-fluid brochure">
  <div class="row wow fadeIn">
    <div class="col-md-12 brochurewrapper">
      <h6><?php echo $brochureHeading; ?></h6>
      <p>Click <a href="<?php echo $brochureLink ?>">HERE</a> to download the brochure as a pdf.</p>
      <img src="<?php echo $brochureCoverImg; ?>" alt="<?php echo $brochureHeading; ?>">
    </div>
  </div>
</div>

<div class="brochureimg" style="background-image: url(<?php echo $afterBrochureImg ?>)">

</div>
