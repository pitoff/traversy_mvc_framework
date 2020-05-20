<?php require APPROOT .'/views/inc/header.php';?>
<h3><?php echo $data['title'];?></h3>

<ul>
	<?php foreach($data['posts'] as $post) : ?>
		<li><?php echo $post->caption; ?></li>
	<?php endforeach; ?>
</ul>
<?php require APPROOT .'/views/inc/footer.php';?>