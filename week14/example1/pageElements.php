<?php
/* The functions defined in this file are used to create various 
   structural elements in the pages.
   
   Author: Andreas Schoter
*/

/* Constants defining the top level menu items in the site
   Note that the numerical values of these constants need to
   match up with the menuItems array defined in the displayMenu
   function.
*/
const HOME = 0;
const ABOUT = 1;
const CONTACT = 2;

/* Display the menu in a page.
*/
function displayMenu($section)
{
	// the top level menu items are stored as an array
	$menuItems = array('<a href="index.php" id="Home">Home</a>',
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

/* Display the footer information.
*/
function displayFooter()
{
	echo "<div id='footer'>Here is the footer text! <span id='cctext'>&copy; Forth Valley College</span></div>";
}

/* Display the user form. If the user has not signed in, then this will be a sign-in
   form asking for their name. If they are signed in, it will be a sign-out form.
*/
function displaySignIn()
{
	echo '<span id="signin"><form action="signIn.php" name="signInForm" method="post">Please enter your name: <input type="text" name="userName"> <input type="submit" value="Say Hi!"></form></span>';
}

?>
