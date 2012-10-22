<ul class="breadcrumb">
	<?php $x = 0; foreach($site->breadcrumb() AS $crumb) { ?>
		<li><a<?php echo ($crumb->isActive()) ? ' class="active"' : '' ?> href="<?php echo $crumb->url() ?>"><?php if ($x==0) echo 'Home'; else echo $crumb->title(); ?></a></li>
	<?php $x++; } ?>
</ul>
