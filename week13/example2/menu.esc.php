<?php

const HOME = 0;
const ABOUT = 3;
const CONTACT = 4;

function displayMenu($section)
{
	$menuItems = array('<a href="index.php" id="Home">Home</a>',
					   '<a href="#" id="MenuItem1">Menu Item 1</a><ul><li><a href="#">Test</a><li><a href="#">Test2</a></ul>',
					   '<a href="#" id="MenuItem1">Menu Item 2</a>',
					   '<a href="about.php" id="MenuItem2">About</a>',
					   '<a href="contact.php" id="Contact">Contact</a>');
?>
	<div id="menu">
		<div class="menuBackground">
			<ul class="dropDownMenu">

<?php			
	$menuCount = count($menuItems);
	for ($i = 0; $i < $menuCount; $i++) {
		echo "\n<li";
		if ($section == $i) {
			echo " class='selected'";
		}
		echo ">" . $menuItems[$i];
	}
?>
	
				</ul>
			</div>
		</div>
<?php		
}
?>