<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Association des 2 faubourgs - Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
    <!-- <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>"> -->
    <!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <?= $this->section('css') ?>
</head>
<body>
    <div class="container">
        <h3> <?= $this->e($title) ?> </h3>
        <section>
            <?= $this->section('main_content') ?>
        </section>
    </div>
    <!-- script references -->
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
    <?= $this->section('js') ?>
</body>

</html>