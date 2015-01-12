<?php
	require_once get_stylesheet_directory() . "/apis/twitter.php";
?>

			</div>
			<!-- /Content -->

			</div>
			<!-- /Container -->

		<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
		<div id="il-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row"><!--Nested row allows division by three-->
							<div class="col-sm-4">
								<ul>
									<?php $main_menu_items = array("Home", "What we do", "How we work", "Who we are", "Contact us");

							      		foreach ($main_menu_items as $mmi) {
							      			//Get rid of upper case and spaces
							      			$url_string = strtolower(str_replace(" ", "-", $mmi));
							      			//Make the menu
							      			if (is_page($mmi)): ?>
							      				<li class="active">
							      					<a href="<?=bloginfo('url');?>/<?=$url_string;?>"><?=$mmi;?><span class="sr-only">(current)</span></a>
							      				</li>
							      			<?php else: ?>
							      				<li>
							      					<a href="<?=bloginfo('url');?>/<?=$url_string;?>"><?=$mmi;?></a>
							      				</li>
							      			<?php endif;
							      		}
						      		?>
								</ul>
							</div>
							<div class="col-sm-4 text-justify">
								<h3>From Twitter</h3>
							  	<?php foreach($tweets as $t) : ?>
							  		<div id="tweets">
							      		<p style="margin-bottom: 0;">
									        <span class="tweet-time" style="font-weight:bold;">
									        	<?php echo date("j F, Y, g:i a", $t['time'])

									        	// human_time_diff($t['time'], current_time('timestamp'));?>
									        </span>
									    </p>
									    <p>
									        <?php echo $t['text']; ?>
							      		</p>
							      	</div>
							  	<?php endforeach; ?>
							</div>
							<div class="col-sm-4">
								<p>more social</p>
							</div>
						</div>
					<div class="col-sm-2">
					</div>
				</div>



				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
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
								<a href="<?=bloginfo('url');?>/terms-of-use">Terms of use</a>.
							</li>
							<li>
								<a href="<?=bloginfo('url');?>/privacy-policy">Privacy policy</a>.
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!-- /il-footer -->

		<?php wp_footer(); ?>
	</body>
</html>
