<?php $this->layout('layoutBack', ['title' => 'Backoffice accueil']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-xs-9  col-lg-9 text-center">
            <h3>
                <?php echo "Bonjour ";
                echo $_SESSION['user']['firstname'];
                echo "  ";
                echo $_SESSION['user']['lastname'];?>
            </h3>
            <br>
            <p>
                <h4>Bienvenue sur le backoffice du site de l'association des 2 faubourgs de lille
                </h4>
            <p/>
        </div>
    </div>
</div>
<div class="top_logo block-center"> <!-- LOGO --> </div><br>


<?php $this->stop('main_content') ?>