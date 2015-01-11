<?php
?>

			</div>
			<!-- /Content -->

			</div>
			<!-- /Container -->

		<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
		<div class="il-footer">
			<ul>
				<li>
					© 
					<?php //So that you don't need to update footer every year.
						$startYear = 2015; 
						$curYear = date('Y'); 
						echo $startYear . (($startYear != $curYear) ? '-' . $curYear : '');
						?>
					Ignition Law. All Rights Reserved.
				</li>
				<li>
					<a href="<?=bloginfo('url');?>/terms-of-use">Terms of use</a>
				</li>
				<li>
					<a href="<?=bloginfo('url');?>/privacy-policy">Privacy policy</a>
				</li>
			</ul>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
