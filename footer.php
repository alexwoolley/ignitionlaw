<?php
	require_once get_stylesheet_directory() . "/apis/twitter.php";
	require_once get_stylesheet_directory() . "/header.php";
?>

			</div>
			<!-- /Content -->

			</div>
			<!-- /Container -->

		<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->

			<div class="container-fluid" id="il-footer">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-3">
						<div class="row"><!--Nested row allows division by three-->
							<div class="col-md-4 col-sm-12 text-justify">
								<h3>Igniting the Spark</h3>
								<h5 class="footer-sub-headings">Quarterly Interviews with our Fantastic Clients</h5>
								<div class="footer-text">
									<p>Welcome to Ignition Law’s new ‘Igniting the Spark’ series, where we spend 5 minutes with inspiring entrepreneurs, talking about the key moments that defined their career.</p>
									<p>This time, we speak with Sara Guiducci, a Senior Fine Wine Sales Executive at world-renowned Corney and Barrow.</p>
									<em><a href="<?= get_site_url(); ?>/igniting-the-spark-with-sara-guiducci/">Read more...</a></em>
								</div>

							</div>
							<div class="col-md-4 col-sm-12 text-justify">
								<h3>
									<a href="https://twitter.com/ignitionlaw" target="_blank" style="color:#333333; border-bottom:0;">Twitter Feed</a>
								</h3>
							  	<?php foreach($tweets as $t) : ?>
							  		<div class="footer-text">
							      		<p style="margin-bottom: 0;">
									        <span class="footer-sub-headings">
									        	<?php echo date("j F, Y, g:i a", $t['time']); ?>
									        </span>
									    </p>
									    <p>
									        <?php echo $t['text']; ?>
							      		</p>
							      	</div>
							  	<?php endforeach; ?>
							</div>
							<div class="col-md-4 col-sm-12 text-justify">
								<h3>Contact Us:</h3>
								<div class="footer-text">
									<p>Don't hesitate to get in touch with us, whether you're looking for a lawyer, legal advice, or a new job. Call, Skype, or Tweet us, or find more details on our <a href="<?= get_site_url() . "/contact-us" ;?>">contact page</a>.</p>
									<p>D: 020 3432 4020<br>
									Skype: <a href="skype:IgnitionLaw?call">IgnitionLaw</a><br>
									Twitter: <a href="https://twitter.com/ignitionlaw" target="_blank">@IgnitionLaw</a></p>
								</div>
								<a href="https://twitter.com/ignitionlaw" target="_blank">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/twitter.png" class="desaturate socialbw">
								</a>
								<a href="https://www.linkedin.com/company/9222237" target="_blank">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/linkedin.png" class="desaturate socialbw">
								</a>
								<a href="https://www.facebook.com/ignitionlaw" target="_blank">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/facebook.png" class="desaturate socialbw">
								</a>
								<a href="https://plus.google.com/communities/113707983229855618630" target="_blank">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/googleplus.png" class="desaturate socialbw">
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-3">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2" id="footer-bottom">
						<ul>
							<li>
								© 
								<?php //So that you don't need to update footer every year.
									$startYear = 2015; 
									$curYear = date('Y'); 
									echo $startYear . (($startYear != $curYear) ? ' – ' . $curYear : '');
									?>
								Ignition Law. All Rights Reserved.
							</li>
							<li>
								<a href="<?=bloginfo('url');?>/legal-notices">Legal Notices</a>.
							</li>
							<li>
								<a href="<?=bloginfo('url');?>/privacy-policy">Privacy Policy</a>.
							</li>
						</ul>
					</div>
				</div>


			</div><!-- /il-footer -->

		<?php wp_footer(); ?>
	</body>
</html>
