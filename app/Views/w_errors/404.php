<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>

<h1>404. Perdu ?</h1>

<a href="<?= $this->url('association_home') ?>">Revenir à la page d'accueil du site</a>

<?php $this->stop('main_content'); ?>
