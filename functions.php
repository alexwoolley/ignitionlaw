<?php

add_theme_support( 'post-thumbnails' ); 

////////////////// MY FUNCTIONS /////////////////////////

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


function getTeam () {

	//For get_page_children http://codex.wordpress.org/Function_Reference/get_page_children

	// Set up the objects needed
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

	// Get the page as an Object
	$about_us =  get_page_by_title('About Us');

	// Filter through all pages and find Portfolio's children
	$about_us_children = get_page_children( $about_us->ID, $all_wp_pages );

	//Make array of titles of children pages with orders, i.e. "Alex McPherson", "David Farquharson" etc.
	$children_titles_with_orders = [];
	foreach ($about_us_children as $child) {

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
		<div class="col-sm-4">
			<?php
				$child_id = $cto['id'];
				$child_title = $cto['title'];
				$url_string = strtolower(str_replace(" ", "-", $child_title));
				$link = get_site_url() . "/about-us/" . $url_string;
			?>
			<a href="<?= $link; ?>">
				<?php
					echo get_the_post_thumbnail( $child_id, "full", array('class' => 'img-responsive gunnercooke-curves-images') );
				?>
			</a>
			<div class="text-center">
				<h4>
					<a href="<?= $link; ?>"><?= $child_title; ?></a>
				</h4>
			</div>
			<?php
				$postid = url_to_postid( get_site_url() ."/" . get_the_title() ."/" . $url_string ); 
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