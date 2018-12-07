<?php

/* Constants defining the top level menu items in the site
   Note that the numerical values of these constants need to
   match up with the menuItems array defined in the displayMenu
   function.
*/
const HOME = 0;
const ABOUT = 3;
const CONTACT = 4;

/* Display the menu in a page.
*/
function displayMenu($section)
{
	// the top level menu items are stored as an array
	$menuItems = array('<a href="index.php" id="Home">Home</a>',
					   '<a href="#" id="MenuItem1">Menu Item 1</a><ul><li><a href="#">Test</a><li><a href="#">Test2</a></ul>',
					   '<a href="#" id="MenuItem1">Menu Item 2</a>',
					   '<a href="about.php" id="MenuItem2">About</a>',
					   '<a href="contact.php" id="Contact">Contact</a>');
	
	// write the opening structure of the menu
	echo '<div id="menu">
			<div class="menuBackground">
				<ul class="dropDownMenu">';
				
	// write the individual menu items
	$menuCount = count($menuItems);
	for ($i = 0; $i < $menuCount; $i++) {
		echo "\n<li";
		if ($section == $i) { // if an item is selected, add the correct class spec
			echo " class='selected'";
		}
		echo ">" . $menuItems[$i];
	}
	
	// write the closing structure of the menu
	echo "\n</ul>
			</div>
		</div>";
}

?>