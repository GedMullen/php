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
            
            <div id="header"><h1>Contact</h1></div>

			<?php displayMenu(CONTACT); ?>

            <div id="content" style="overflow:auto;">
			
			<h1>Contact Us</h1>
			
			<p>If you want to contact us about anything, please feel free to shout very loudly. We may hear you!
			
			</div>

            <div id="footer">Here is the footer text!</div>
        
        </div>
    
    </body>    
</html>







