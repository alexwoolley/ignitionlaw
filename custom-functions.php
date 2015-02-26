<?php
//My functions go here and are required in functions.php so WordPress understands them.

//This function is for use in the header and footer
//It gets a list of the main menu links.
//NB It does not specify whether the list is ordered or unordered

function listMainMenu () {

	global $main_menu_items;
	$main_menu_items = array("Home", "What We Do", "How We Work", "About Us", "Contact Us", "Gunnercooke");

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
		<div class="col-sm-4 col-xs-6">
			<?php
				$child_id = $child->ID;
				$child_post_title = $child->post_title;
				$url_string_0 = strtolower(str_replace(" ", "-", $parent_page));
				$url_string_1 = strtolower(str_replace(" ", "-", $child_post_title));
				$link = get_site_url() . "/" . $url_string_0 . "/" . $url_string_1;
			?>
			<a href="<?= $link; ?>">
				<?php
					echo get_the_post_thumbnail( $child_id, "medium", array('class' => 'img-responsive gunnercooke-curves-images') );
				?>
			</a>
			<div class="text-center">
				<h4>
					<?php $names = explode(" ", $child_post_title); ?>
					<a href="<?= $link; ?>" class="about-us-names">
						<?php foreach ($names as $name) {
							echo $name . "<br>"; //Splitting the names over two lines is to prevent irritating flow issues on smaller screens. It would probably be better to do this using jQuery's width() and only split the names onto two lines when necessary, but for the time being this will have to do.
						}
						?>
					</a>
				</h4>
			</div>
			<?php
				$postid = url_to_postid( get_site_url() ."/" . get_the_title() ."/" . $url_string_1 ); 
				$job_title = get_post_meta( $postid, "Title", true);
			?>
			<div class="text-center">
				<p><?= $job_title; ?></p>
			</div>
		</div>
		<?php
	}
}


?>