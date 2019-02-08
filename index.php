<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage of Tomáš Balyo</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="outer-container">
    <div id="container">
        <div id="header">
            <h1><a href="index.php">Tomáš Balyo</a></h1>
        </div>
        <div id="nav">
        	<div id="center-ul">
        		<ul>
        			<?php include('menu.phtml'); ?>
        		</ul>
			</div>
        </div>
        <div id="body">
        	<?php
        		$page = $_GET['page'];
        		if (in_array($page, array('Introduction', 'Teaching', 'Research'))) {
				echo "<h2>$page</h2><hr>";
	        		include($page . '.phtml');
        		} else {
				echo "<h2>Introduction</h2><hr>";
	        		include('Introduction.phtml');
        		}
        	?>
			<?php include('sidebar.phtml'); ?>            
            <div class="clear"></div>
        </div>
    
        <div id="footer">
            <div class="footer-content">
                <p>Design by <a href="http://www.spyka.net">spyka.net</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a></p>
            </div>
        </div>
    </div>
</div>

<div style="text-align: center; font-size: 0.75em;">
	Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.
</div>

</body>
</html>
