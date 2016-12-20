<?php $this->layout('layoutBack', ['title' => 'Backoffice accueil']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-xs-9  col-lg-9"><h3>

<?php echo "bonjour ";
echo $_SESSION['user']['firstname'];
echo "  ";
echo $_SESSION['user']['lastname'];
?></h3><br>
                    <p><h4>Bienvenue sur le backoffice du site de l'association des 2 faubourg de lille</h4></p>
                </div></div></div>


<?php $this->stop('main_content') ?>