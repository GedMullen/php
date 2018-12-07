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
            
            <div id="header"></div>

			<?php displayMenu(HOME); ?>

            <div id="content" style="overflow:auto;">
			
			<h1>Welcome</h1>
			
			<p>Welcome to the wonderful world of PHP programming...
			
			<p>We hope you learn a lot of useful stuff here!
			
			</div>

            <div id="footer">Here is the footer text!</div>
        
        </div>
    
    </body>    
</html>







