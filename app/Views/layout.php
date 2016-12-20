<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 shrink-to-fit=no">


	<link rel="stylesheet" href="<?= $this->assetUrl('front/bootstrap/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?= $this->assetUrl('front/css/style_header.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('front/css/style_main_section.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('front/css/style_footer.css') ?>">

  <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">


	<title><?= $this->e($title) ?></title>

</head>
<body>
	<div>
		<header>
			<?= $this->insert('front/header') ?>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<?= $this->insert('front/footer') ?>
		</footer>
	</div>

	<!-- script references -->
		<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/backoffice/script.js') ?>"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACtR-RW0loxCytQVt5juH0ZLI4GGJG3gw&callback=initMap">
        <?= $this->section('js') ?></script>

		<script src="<?= $this->assetUrl('front/bootstrap/js/bootstrap.min.js') ?>"></script>

		<script src="<?= $this->assetUrl('front/js/jquery.3.0.0.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('front/js/jquery-ui.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('front/js/main.js') ?>"></script>

		<script src="<?= $this->assetUrl('front/slider/js/jquery.3.0.0.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('front/slider/js/responsiveslides.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('front/slider/js/slider.js') ?>"></script>
		
</body>
</html>