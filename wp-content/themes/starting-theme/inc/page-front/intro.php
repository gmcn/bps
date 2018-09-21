<?php

  $intro_heading = get_field('intro_heading');
  $intro_sub_heading = get_field('intro_sub-heading');
  $intro_video = get_field('intro_video');

 ?>

<a name="introduction"></a>
<div class="container-fluid intro" id="intro">

  <div class="title vert-align wow fadeIn">
    <h1><?php echo $intro_heading ?></h1>
    <p><?php echo $intro_sub_heading ?></p>
  </div>

  <div class="video_button">
    <a class="wow fadeInUp" data-toggle="modal" data-target=".bs-example-modal-lg">

      <span>Belfast Power Video</span>


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100px 100px">
        <defs>
          <style>
            .cls-1 {
              fill: none;
              stroke: #fff;
              stroke-miterlimit: 10;
              stroke-width: 2px;
            }

            .cls-2 {
              fill: #fff;
            }
          </style>
        </defs>
        <g id="Group_388"  data-name="Group 388" transform="translate(-2366.741 -2883.75)">
          <path id="Path_21418" data-name="Path 21418" class="cls-1" d="M29.024,5.189a6.513,6.513,0,0,0-1.17-3.059A3.507,3.507,0,0,0,24.974.87C20.925.6,14.9.6,14.9.6h0S8.868.6,4.819.87A4.211,4.211,0,0,0,1.94,2.13,6.513,6.513,0,0,0,.77,5.189S.5,7.708.5,10.138v2.339c0,2.519.27,4.949.27,4.949a6.513,6.513,0,0,0,1.17,3.059,4.8,4.8,0,0,0,3.149,1.35c2.339.27,9.808.27,9.808.27s6.029,0,10.078-.36a4.211,4.211,0,0,0,2.879-1.26,6.513,6.513,0,0,0,1.17-3.059s.27-2.519.27-4.949V10.138C29.294,7.618,29.024,5.189,29.024,5.189Z" transform="translate(2367.241 2884.15)"/>
          <path id="Union_5" data-name="Union 5" class="cls-2" d="M.81,12.8A1.729,1.729,0,0,1,0,11.36V1.642A1.526,1.526,0,0,1,.81.2a1.721,1.721,0,0,1,1.62,0l8.1,4.859a1.621,1.621,0,0,1,.81,1.44,1.672,1.672,0,0,1-.81,1.35l-8.1,4.859a1.451,1.451,0,0,1-.81.27A1.337,1.337,0,0,1,.81,12.8Z" transform="translate(2377.368 2889.046)"/>
        </g>
      </svg>



    </a>
  </div>

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <video width="100%" height="550px" controls>
          <source src="<?php echo get_template_directory_uri(); ?>/video/belfast-power-station_video.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>

      </div>
    </div>
  </div>
</div>
