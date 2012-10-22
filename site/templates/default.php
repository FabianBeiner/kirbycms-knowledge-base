<?php snippet('header') ?>
<div class="content">
	<?php snippet('breadcrumb') ?>
	<?php echo kirbytext($page->text()) ?>
	<footer>
		(Updated: <?php echo date('F j, Y \a\t H:i:s', $page->modified()); ?>)
	</footer>
</div>
<?php snippet('footer') ?>
