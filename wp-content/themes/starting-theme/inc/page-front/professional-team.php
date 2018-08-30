<?php

  $proHeading = get_field('professional_team_heading');

 ?>

<a name="professionalteam"></a>
<div class="container-fluid professional-team">
  <div class="row">
    <!-- <div class="vert-align wow fadeIn"> -->
      <div class="col-md-12">
        <h6><?php echo $proHeading ?></h6>


        <?php if( have_rows('professional_team_logos') ): ?>

        	<ul class="team">

        	<?php $i=0; while( have_rows('professional_team_logos') ): the_row();

        		// vars
        		$companyName = get_sub_field('company_name');
        		$companyBranding = get_sub_field('company_branding');

        		?>

        		<li class="<?php echo $i; ?> wow <?php if ($i % 2) : ?>fadeInUp <?php else : ?> fadeInDown<?php endif; ?>">
              <img src="<?php echo $companyBranding; ?>" alt="<?php echo $companyName ?>">


        		</li>

        	<?php $i++; endwhile; ?>

        	</ul>

        <?php endif; ?>


      </div>
    <!-- </div> -->
  </div>
</div>
