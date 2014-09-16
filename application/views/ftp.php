<?php 
	include 'templates/header.php';
	echo '<div class = "container_big"><div class = "row lesson_main">';
	traverse($path);
	echo '</div></div>';
	include 'templates/footer.php';
 ?>