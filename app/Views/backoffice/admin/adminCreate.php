<?php $this->layout('layoutBack', ['title' => 'Ajouter administateur']) ?>

<?php $this->start('main_content') ?>

<!-- Formulaire d'ajout administateur -->
<form class="form-horizontal" action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">
    <div class="container-fluid">
        <div class="row">
           <div class="form-group"> 
                <div class="col-sm-push-3 col-sm-4">
                    <label class ="control-label" for="firstname">Nom :</label>
                    <input id="firstname" name="firstname" type="text" class="center-block form-control" placeholder="Nom">
                </div> 
            </div>         
            <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <label class ="control-label" for="lastname">Prenom :</label>
                    <input id="lastname" name="lastname" type="text" class="center-block form-control" placeholder="Prenom">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <label for="email" class ="control-label">Email :</label>
                    <input id="email" name="email" type="email" class="center-block form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <label class ="control-label" for="password">Mot de passe :</label>
                    <input id="password" name="password" type="password" class="center-block form-control" placeholder="Mot de passe">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <label class ="control-label" for="cf-password">Confirmer Mot de passe :</label>
                    <input id="cf-password" name="cf-password" type="password" class="center-block form-control" placeholder="Confirmer Mot de passe"><br>
                </div>
            </div>
             <div class="form-group">
                <div class="col-sm-push-3 col-sm-4">
                    <button name="createAdmin" class="center-block btn btn-info" type="button" placeholder="Ajouter">Ajouter</button>
                    <br>
                    <a href="<?= $this->url('backoffice_AdminView') ?>" class="center-block btn btn-success">liste des administrateurs</a>
                </div>
             </div>
        </div>
    </div>
 </form>
             <br>
                <br>
<?= $message ?>
<?php $this->stop('main_content') ?>
