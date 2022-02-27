<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= esc($title) ?></title>
</head>
<body>
	
	<?= $this->include('layout/navbar') ?>

	<section class="hero is-link">
		<div class="hero-body">
			<p class="title">
				<?= esc($title) ?>
			</p>
			<p class="subtitle">
				Link subtitle
			</p>
		</div>
	</section>

</body>
</html>