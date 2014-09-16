<div class="container_big">
	<div class="col-md-2 content">
		<h3>名录</h3>
		<?php foreach ($student as $stu_item) {
			echo '<h5><a href="',$stu_item['name'],'">',$stu_item['name'],'</a></h5>';
		}?>
-	</div>
	<div class="col-md-10 padding_0">
		<?php foreach ($student as $stu_item):?>
		<div class="student_in" style = "background-image:url(<?php echo base_url(),"include/images/",$stu_item['pic'] ?>);">
			<a id = "<?php echo $stu_item['name'] ?>"><h1><?php echo $stu_item['name'] ?></h1></a>
			<p><?php echo $stu_item['text'] ?></p>
		</div>
		<?php endforeach ?>
	</div>
</div>



