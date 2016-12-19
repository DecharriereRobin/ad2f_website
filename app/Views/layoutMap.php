<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title><?= $this->e($title) ?></title>
		<!-- STYLE DE GOOGLE MAP -->
		<style type="text/css">
		      html, body { height: 100%; width: :100%; margin: 0; padding: 0; }
		      #map { height: 50%; width: :50%; text-align: center;}
    	</style>

	</head>
	<body>
		<header>
			<h1> <?= $this->e($title) ?></h1>
		</header>
		<div id="map"></div>
		<section>
				<?= $this->section('main_content') ?>
		</section>
         <script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/map.js') ?>"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBGsX0atT30L3fBwOnUgD-bIZQ3oAIalM&callback=initMap"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<?= $this->section('script') ?>


	</body>
</html>
