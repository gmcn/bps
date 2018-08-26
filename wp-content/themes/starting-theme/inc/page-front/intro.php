<?php

  $intro_heading = get_field('intro_heading');
  $intro_sub_heading = get_field('intro_sub-heading');
  $intro_video = get_field('intro_video');

 ?>

<a name="introduction"></a>
<div class="intro">

  <div class="vert-align wow fadeIn">
    <h1><?php echo $intro_heading ?></h1>
    <p><?php echo $intro_sub_heading ?></p>
  </div>

  <button type="button" class="btn btn-primary wow fadeInUp" data-toggle="modal" data-target=".bs-example-modal-lg">Belfast Power Video <img src="<?php echo get_template_directory_uri(); ?>/images/play_icon.svg" width="50px;" alt="Belfast Power Video"></button>

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <iframe width="100%" height="550px" src="https://www.youtube.com/embed/<?php echo $intro_video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    </div>
  </div>
</div>

</div>
