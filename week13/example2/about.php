<!DOCTYPE html>
<?php
require 'menu.php';
?>

<html>
    <head>
        <title>PHP Menu</title>
    
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>

    </head>  
    
    <body>
        <div id="container">
            
            <div id="header"><h1>About</h1></div>

			<?php displayMenu(ABOUT); ?>

            <div id="content" style="overflow:auto;">
			
			<h1>About Us</h1>
			
			<p>If we had anything interesting to say about ourselves, this is certainly where we would say it.
			
			<p>I had a bout of coughing once, does that count?
			
			</div>

            <div id="footer">Here is the footer text!</div>
        
        </div>
    
    </body>    
</html>







