<?= esc($title) ?>

<?php if (! empty($news) && is_array($news)): ?>
	<?php foreach ($news as $new): ?>
		<p><?= esc($new['title']) ?></p>
	<?php endforeach ?>
<?php else: ?>
	<p>No hay datos</p>
<?php endif ?>