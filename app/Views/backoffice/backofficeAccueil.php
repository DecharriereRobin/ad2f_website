<?php $this->layout('layoutBack', ['title' => 'Backoffice accueil']) ?>

<?php $this->start('main_content') ?>
<?php echo "bonjour ";
echo $_SESSION['user']['firstname'];
echo $_SESSION['user']['lastname'];

echo "<br />";

?>
<a href="admin/logout" >DECONNECTION</a>
<?php $this->stop('main_content') ?>
