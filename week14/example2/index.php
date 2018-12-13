<!DOCTYPE html>
<!-- 
	The front page of the site.
-->
<?php
require 'pageElements.php';
?>

<html>
    <head>
        <title>PHP Forms 1</title>
    
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	
    </head>  
    
    <body>
        <div id="container">
		
            <div id="header"></div>

			<?php displayMenu(HOME); ?>

            <div id="content" style="overflow:auto;">
			
			<h1>Welcome</h1>

			<p>Welcome to the wonderful world of PHP programming...
			
			<p>We hope you learn a lot of useful stuff here!
			
			<form action="processForm.php" name="signInForm" method="post">
			<table class="twoColForm">
			<tr><td>Please enter your name:</td><td><input type="text" name="userName"></td></tr>
			<tr><td>What is your favourite colour?</td><td>
			<select name="faveColour">
				<option value=""></option>
				<option value="Red">Red</option>
				<option value="Crimson">Crimson</option>
				<option value="Green">Green</option>
				<option value="Chartreuse">Chartreuse</option>
				<option value="Blue">Blue</option>
				<option value="CornflowerBlue">Cornflower Blue</option>
				<option value="Cyan">Cyan</option>
				<option value="LightCyan">Light Cyan</option>
				<option value="Magenta">Magenta</option>
				<option value="Fuchsia">Fuchsia</option>
				<option value="Yellow">Yellow</option>
				<option value="GoldenRod">Golden Rod</option>
			</select>
			</td></tr>
			<tr><td colspan="2"><input type="submit"></input></td></tr>
			</table>
			</form>
			
			</div>

            <?php displayFooter();?>
        
        </div>
    
    </body>    
</html>
