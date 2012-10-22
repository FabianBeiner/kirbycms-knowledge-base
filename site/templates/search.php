<?php
	snippet('header');

	$search = new search(array(
		'searchfield' => 'q',
		'ignore'      => array('search', 'error'),
		'words'       => true,
		'paginate'    => 10
	));

	$results = $search->results();

?>

<div class="content">

	<?php snippet('breadcrumb') ?>

	<div class="search">
		<form action="<?= thisURL() ?>">
			<div>
				<input type="text" placeholder="Search documentation…" name="q" value="<?= html($search->query()) ?>">
				<input type="submit" value="Search">
			</div>
		</form>

		<?php if($results): ?>

		<?php snippet('pagination', array('pagination' => $results->pagination())) ?>

		<ul>
		  <?php foreach($results as $row): ?>
		  <li>
			<a href="<?= $row->url() ?>">
				<strong><?= html($row->title()) ?></strong>
				<?= html($row->url()) ?></a>
			</a>
		  </li>
		  <?php endforeach ?>
		</ul>

		<?php snippet('pagination', array('pagination' => $results->pagination())) ?>

		<?php elseif($search->query()): ?>
		<div class="no-results">No results for <strong><?= html($search->query()) ?></strong></div>
		<?php endif ?>

	</div>

</div>

<?php snippet('footer') ?>
