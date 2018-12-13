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
			
			<h1>Form Processing</h1>

			<p>Welcome to the wonderful world of PHP programming...
			
<?php
/* Introductory form processing...
*/
	$userName = $_POST['userName'];
	$colourName = $_POST['faveColour'];
	
	echo "<p><span style=\"color:$colourName;\"> $userName likes $colourName</span>";
?>

			</div>

            <?php displayFooter();?>
        
        </div>
    
    </body>    
</html>
