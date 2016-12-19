<?php $this->layout('layoutBack', ['title' => 'Backoffice accueil']) ?>

<?php $this->start('main_content') ?>
<?php $this->layout('layoutBack', ['title' => 'Backoffice accueil']) ?>
 <div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
<?php echo "bonjour ";
echo $_SESSION['user']['firstname'];
echo $_SESSION['user']['lastname'];

echo "<br />";

?>
<a href="admin/logout" >DECONNECTION</a>
<?php $this->stop('main_content') ?>
                </div></div></div>
