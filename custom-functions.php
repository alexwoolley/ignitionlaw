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

function getTeam ( $parent_page ) {

	//For get_page_children http://codex.wordpress.org/Function_Reference/get_page_children

	// Set up the objects needed
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

	// Get the page as an Object
	$parent_page_object =  get_page_by_title($parent_page);

	// Filter through all pages and find Portfolio's children
	$parent_page_children = get_page_children( $parent_page_object->ID, $all_wp_pages );

	//Make array of titles of children pages with orders, i.e. "Alex McPherson", "David Farquharson" etc.
	$children_titles_with_orders = [];
	foreach ($parent_page_children as $child) {

		$child_with_order = array(
			'id' => $child->ID,
			'title' => $child->post_title,
			'menu_order' => $child->menu_order
		);

		array_push($children_titles_with_orders, $child_with_order);

	}

	//See http://stackoverflow.com/questions/2699086/sort-multi-dimensional-array-by-value
	//Sort the arrays so that the lowest menu order displays first.
	usort($children_titles_with_orders, function($a, $b) {
    	return $a['menu_order'] - $b['menu_order'];
	});

	foreach ($children_titles_with_orders as $cto) { ?>
		<div class="col-sm-4 col-xs-6">
			<?php
				$child_id = $cto['id'];
				$child_post_title = $cto['title'];
				$url_string_0 = strtolower(str_replace(" ", "-", $parent_page));
				$url_string_1 = strtolower(str_replace(" ", "-", $child_post_title));
				$link = get_site_url() . "/" . $url_string_0 . "/" . $url_string_1;
			?>
			<a href="<?= $link; ?>">
				<?php
					echo get_the_post_thumbnail( $child_id, "full", array('class' => 'img-responsive gunnercooke-curves-images') );
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