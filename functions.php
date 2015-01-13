<?php

function listMainMenu () {

	global $main_menu_items;
	$main_menu_items = array("Home", "What We Do", "How We Work", "Gunnercooke", "About Us", "Contact Us");

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