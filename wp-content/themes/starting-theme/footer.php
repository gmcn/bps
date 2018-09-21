<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<a name="contact"></a>

	<footer>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 footermatch address wow fadeInLeft">
					<div class="wrapper">
						<!-- <h5>Address</h5> -->

						<!-- <p>
							Belfast Power Station
						</p> -->

						<p>
							Evermore Energy,<br />
							Forsyth House, Cromac Square<br />
							Belfast, BT2 8LA
						</p>
					</div>
				</div>
				<div class="col-md-3 footermatch email wow fadeInLeft">
					<div class="wrapper">
						<!-- <h5>Email & Media</h5> -->

						Media contact:<br  />
						<a href="mailto:info@evermoreenergy.com">info@evermoreenergy.com</a>

						Careers contact:<br  />
						<a href="mailto:careers@evermoreenergy.com">careers@evermoreenergy.com</a>
					</div>
				</div>
				<div class="col-md-2 footermatch col-md-offset-4 branding wow fadeInRight">
					<div class="wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/crescentcapital_logo.svg" alt="Crescent Capital" />
						<img src="<?php echo get_template_directory_uri(); ?>/images/evermore-energy_logo.svg" alt="Evermore Energy" />
					</div>
				</div>
			</div>
		</div>
		<div class="signature">
			Copyright <?php echo date('Y'); ?> © Evermore Energy
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
