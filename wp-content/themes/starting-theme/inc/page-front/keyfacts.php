<?php

  $keyFactsHeading = get_field('key_facts_heading');
  $keyFactsCopy = get_field('key_facts_copy');
  $keyFactsImg = get_field('key_facts_img');
  $keyFactsImgTagline = get_field('key_facts_img_tagline');

 ?>

<a name="keyfacts"></a>
<div class="container-fluid keyfacts">

      <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
          <h3><?php echo $keyFactsHeading ?></h3>


          <?php if( have_rows('key_facts_copy') ): ?>

          	<ul class="facts">

          	<?php $i = 0; while( have_rows('key_facts_copy') ): the_row();

          		// vars
          		$fact_img = get_sub_field('fact_img');
          		$fact_title = get_sub_field('fact_title');
          		$fact_copy = get_sub_field('fact_copy');

          		?>

          		<li class="fact wow <?php if ($i % 2) : ?>fadeInUp <?php else : ?> fadeInDown<?php endif; ?>">

          			<img src="<?php echo $fact_img ?>" alt="<?php echo $fact_title ?>">
                <h4><?php echo $fact_title ?></h4>
                <?php echo $fact_copy ?>

          		</li>

          	<?php $i++; endwhile; ?>

          	</ul>

          <?php endif; ?>


        </div>
    </div>
</div>

<div class="factimg" style="background-image: url(<?php echo $keyFactsImg ?>)">
  <div class="vert-align">
    <h4>"<?php echo $keyFactsImgTagline ?>"</h4>
  </div>
</div>
