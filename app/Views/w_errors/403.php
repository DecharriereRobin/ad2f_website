<?php $this->layout('layout', ['title' => 'Nothing to see here']) ?>

<?php $this->start('main_content'); ?>

<h1>403. Vous n'êtes pas autorisé à afficher cette page.</h1>

<a href="<?= $this->url('association_home') ?>">Revenir à la page d'accueil du site</a>

<?php $this->stop('main_content'); ?>
