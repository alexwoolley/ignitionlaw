<?php
//My functions go here and are required in functions.php so WordPress understands them.

//Take title and turn it into slug.
function titleToSlug ( $title ) {
	//Make majuscule characters miniscule and replace whitespaces with hyphens
	$slug = strtolower(str_replace(" ", "-", $title));
	//Get rid of special characters
	return preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
}


//This function is for use in the header
//It gets a list of the main menu links.
//NB It does not specify whether the list is ordered or unordered

function createMainMenu () {

	global $main_menu_items;
	$main_menu_items = array("Home", "What We Do", "How We Work", "About Us", "Contact Us", "Gunnercooke"
		);

	foreach ($main_menu_items as $mmi) {
		$slug = titleToSlug($mmi); 
		//Create dropdown for Contact Us
		if ($mmi == "Contact Us"): ?>
			<li class="dropdown
				<?php if (is_page($mmi)): ?>
				active
				<?php endif; ?>
			">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Contact Us <span class="caret"></span></a>
	                <ul class="dropdown-menu" role="menu">
	                	<li><a href="<?= bloginfo('url'); ?>/<?= $slug; ?>">Our Contact Details</a></li>
	                	<?php
	                		$person_title = "New Client Engagement Forms: Natural Person Clients";
	                		$corporate_title = "New Client Engagement Forms: Corporate Clients";
	                	?>
	                  	<li><a href="<?= bloginfo('url'); ?>/<?= $slug; ?>/<?= titleToSlug($person_title); ?>"><?= $person_title; ?></a></li>
	                  	<li><a href="<?= bloginfo('url'); ?>/<?= $slug; ?>/<?= titleToSlug($corporate_title); ?>"><?= $corporate_title; ?></a></li>
	                </ul>
             </li>
        <?php else: ?>
		<li 
			<?php if (is_page($mmi)): ?>
			class="active"
			<?php endif; ?>
		>
			<a href="<?=bloginfo('url');?>/<?=$slug;?>"><?= $mmi; ?>
				<?php if (is_page($mmi)): ?>
				<span class="sr-only">(current)</span>
				<?php endif; ?>
			</a>
		</li>
        <?php endif;
	}
}


function createSidebarMenu () {
	global $sidebar_menu_items;
	$sidebar_menu_items = array("Home", "What We Do", "How We Work", "About Us", "Contact Us", "Gunnercooke"
	);
	foreach ($sidebar_menu_items as $smi) {
		$slug = titleToSlug($smi); 
		if ($smi == "Contact Us"): ?>
			<li>
				<a href="<?= bloginfo('url'); ?>/<?= $slug; ?>">
					<?= $smi; ?>
				</a>
				<ul>
	                	<li>
	                		<a href="<?= bloginfo('url'); ?>/<?= $slug; ?>">Our Contact Details</a>
	                	</li>
	                	<?php
	                		$person_title = "New Client Engagement Forms: Natural Person Clients";
	                		$corporate_title = "New Client Engagement Forms: Corporate Clients";
	                	?>
	                  	<li>
	                  		<a href="<?= bloginfo('url'); ?>/<?= $slug; ?>/<?= titleToSlug($person_title); ?>"><?= $person_title; ?></a>
	                  	</li>
	                  	<li>
	                  		<a href="<?= bloginfo('url'); ?>/<?= $slug; ?>/<?= titleToSlug($corporate_title); ?>"><?= $corporate_title; ?></a>
	                  		</li>
	                </ul>
			</li>
		<?php else: ?>
			<li>
				<a href="<?= bloginfo('url'); ?>/<?= $slug; ?>">
					<?= $smi; ?>
				</a>
			</li>
		<?php endif;
	}
}

//This function is for use on the About Us page.
//It takes the title of the parent page, i.e. "About Us" or "Advisory Board", and returns HTML that produces a picture of the team member, their name with a link to their individual page, and their title.

function getPeople ( $parent_page ) {

	$parent_page_object = get_page_by_title( $parent_page );
	$parent_page_id = $parent_page_object->ID;

	$children = get_children(array(
	    'post_parent' => $parent_page_id,
	    'post_type' => 'page',
	    'post_status' => 'publish',
	));

	//Sort the arrays so that the lowest menu order displays first.
	usort($children, function($a, $b) {
    	return $a->menu_order - $b->menu_order;
	});

	foreach ($children as $child) { ?>
		<div class="col-md-4 col-xs-6">
			<div class="about-us-card gunnercooke-curves-no-shadow">
				<?php
					$child_id = $child->ID;
					$child_post_title = $child->post_title;
					$url_string_0 = titleToSlug($parent_page);
					$url_string_1 = titleToSlug($child_post_title);
					$link = get_site_url() . "/" . $url_string_0 . "/" . $url_string_1;
				?>
				<a href="<?= $link; ?>">
					<?php
						echo get_the_post_thumbnail( $child_id, "medium", array('class' => 'img-responsive gunnercooke-curves-no-shadow desaturate') );
					?>
				</a>
				<div class="about-us-card-text">
					<h4 class="text-center">
						<?php $names = explode(" ", $child_post_title); ?>
						<!-- Names on one line for tablet and up -->
						<a href="<?= $link; ?>" class="about-us-names hidden-xs">
							<?php echo $child_post_title; ?>
						</a>
						<!-- Names over two lines for phones to prevent flow problems -->
						<a href="<?= $link; ?>" class="about-us-names visible-xs-inline">
							<?php  foreach ($names as $name) {
								echo $name . "<br>"; 
							}
							?>
						</a>
					</h4>
					<?php
						$postid = url_to_postid( get_site_url() ."/" . get_the_title() ."/" . $url_string_1 ); 
						$job_title = get_post_meta( $postid, "Title", true);
					?>
					<p class="text-center visible-xs-block"><?= $job_title; ?></p>
					<div class="hidden-xs">
						<table id="about-us-table">
							<tbody>
								<tr>
									<td class="first-column">Position:</td>
									<td>Partner</td>
								</tr>
								<tr>
									<td>Previous Clubs:</td>
									<td>Clifford Chance, IMG</td>
								</tr>
								<tr>
									<td>Skills:</td>
									<td>Commercial, IP, Dispute Resolution / Regulatory</td>
								</tr>
								<tr>
									<td>Specialisms:</td>
									<td>Sponsorship, Talent Management, Media &amp; Broadcasting</td>
								</tr>						
							</tbody>
						</table>
						<p><em><a href="<?= $link; ?>"> Full bio...</a></em></p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

function getBreadcrumb ( $post_parent_id ) { ?>
	<p class="breadcrumb">
		<?php 
		// if there is a parent, display the link
		$parent_title = get_the_title( $post_parent_id );
		if ( $parent_title != the_title( ' ', ' ', false ) ): ?>
			You are here: <a href="<?= get_permalink( $post_parent_id ); ?>" title="<?= $parent_title;?>">
				<?php
					if ($parent_title == "Advisory Board"): ?>
						About Us
					<?php else:
						echo $parent_title;
					endif;
				?>
			</a> »
		<?php endif;
		// then go on to the current page
		the_title(); ?>
	</p>
<?php }

function getIgnitionMeta ( $post_parent_id = 1 ) { ?>
	<div class="ignition-meta">
		<p class="breadcrumb">
		<?php if (is_page()):
			$parent_title = get_the_title( $post_parent_id );
			if ( $parent_title != the_title( ' ', ' ', false ) ): ?>
				You are here: <a href="<?= get_permalink( $post_parent_id ); ?>" title="<?= $parent_title;?>">
					<?php
						if ($parent_title == "Advisory Board"): ?>
							About Us
						<?php else:
							echo $parent_title;
						endif;
					?>
				</a> »
			<?php endif;
			// then go on to the current page
			the_title();
			edit_post_link('Edit this entry', ' &bull; '); ?>
			</p>
		<?php elseif (is_single()): ?>
			You are here: <a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>"><?php echo get_the_title( get_option('page_for_posts' ) ); ?></a> » <?php echo the_title(); ?>
			</p>
			<p>
			Posted on
				<?php echo get_the_time('jS F Y');
					if (get_comments_number() > 0):
						echo ' &bull; ';
						comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
					endif;
					edit_post_link('Edit this entry', ' &bull; '); 
				?>
			</p>
		<?php endif; ?>
	</div>
<?php }

?>