<!DOCTYPE html>
<html>
	<?php include 'head.php';?>
	<body class = "Microsoft_YaHei">
	<div id = "headingDefault">
		<?php include 'navigation.php';?>
	</div>
    <div class = "big_top" 
    <?php if (defined("%pic")) 
    	echo "style = \"background-image:url(",base_url(),"include/images/",%pic,";\">" 
    	if (defined("%title_full")) echo %title_full;
    	elseif (defined("%title")) echo %title;
    	else echo "WARNING:Undefined Title!" 
    ?> 
		<br/>
	</div>
