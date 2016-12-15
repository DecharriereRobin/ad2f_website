<?php $this->layout('layoutBack', ['title' => 'Backoffice accueil']) ?>

<?php $this->start('main_content') ?>
<?php echo "bonjour ";
echo $_SESSION['user']['firstname'];
echo "  ";
echo $_SESSION['user']['lastname'];
?>
<p>Bienvenue sur le backoffice du site de l'association des 2 faubourg de lille</p

<?php $this->stop('main_content') ?>
