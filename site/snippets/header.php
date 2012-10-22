<!DOCTYPE html>
<html lang="<?php echo (c::get('lang.current') ? c::get('lang.current') : 'en') ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo ($page->title() != '') ? html($page->title() . ' — ') : '' ?><?php echo html($site->title()) ?> by <?php echo html($site->author()) ?></title>
	<?php echo css('assets/styles/styles.css') ?>
	<?php echo css('assets/styles/php.css') ?>
	<?php echo css('assets/styles/html.css') ?>
	<?php echo css('assets/styles/js.css') ?>
	<?php echo css('assets/styles/css.css') ?>
</head>

<body>
	<div id="wrapper" class="cf">
		<div class="menu">
			<a id="logo" href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="Logo"></a>
			<form id="search" action="<?php echo url() ?>search">
				<div>
					<input type="search" name="q" placeholder="Search...">
				</div>
			</form>
			<?php snippet('navBuilder') ?>
		</div>
