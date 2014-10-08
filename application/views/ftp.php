<?php 
	include 'templates/header.php';
	echo site_url('haha');
	echo image_url('hehe');
	echo '<div class = "container_big"><div class = "row lesson_main">';
	traverse($path);
	echo '</div></div>';
	include 'templates/footer.php';
 ?>