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
					<div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
						<div class="row"><!--Nested row allows division by three-->
							<div class="col-md-4 col-sm-12" id="footer-main-menu">
								<ul>
									<?php listMainMenu (); ?>
								</ul>
							</div>
							<div class="col-md-4 col-sm-12 text-justify">
								<h3>
									<a href="https://twitter.com/ignitionlaw" target="_blank" style="color:#333333; border-bottom:0;">Twitter Feed</a>
								</h3>
							  	<?php foreach($tweets as $t) : ?>
							  		<div id="tweets">
							      		<p style="margin-bottom: 0;">
									        <span class="tweet-time" style="font-weight:bold;">
									        	<?php echo date("j F, Y, g:i a", $t['time']); ?>
									        </span>
									    </p>
									    <p>
									        <?php echo $t['text']; ?>
							      		</p>
							      	</div>
							  	<?php endforeach; ?>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="text-right">
									<a href="https://twitter.com/ignitionlaw" target="_blank">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/twitter.png" class="desaturate socialbw" id="socialbwtop">
									</a>
								</div>
								<div class="text-right">
									<a href="https://www.linkedin.com/company/9222237" target="_blank">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/linkedin.png" class="desaturate socialbw">
									</a>
								</div>
								<div class="text-right">
									<a href="https://www.facebook.com/ignitionlaw" target="_blank">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/facebook.png" class="desaturate socialbw">
									</a>
								</div>
								<div class="text-right">
									<a href="https://plus.google.com/communities/113707983229855618630" target="_blank">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/social_icons/googleplus.png" class="desaturate socialbw">
									</a>
								</div>
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
								<a href="<?=bloginfo('url');?>/terms-of-use">Terms of Use</a>.
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
