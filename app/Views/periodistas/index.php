<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<?= esc($titulo) ?>

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>


<?php if (! empty($periodistas) && is_array($periodistas)): ?>
	<?php foreach ($periodistas as $periodista): ?>
		<p><?= esc($periodista['nombre']) ?> <?= esc($periodista['apellidos']) ?></p>
	<?php endforeach ?>
<?php else: ?>
	<p>No hay datos</p>
<?php endif ?>


<?= $this->endsection() ?>
