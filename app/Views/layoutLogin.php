<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	

</head>
<body>
	<div class="container">
		<header>
			<h1> <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>

	<!-- script references -->
		<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <?= $this->section('js') ?>

</body>
</html>
