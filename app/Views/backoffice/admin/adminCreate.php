<?php $this->layout('layoutBack', ['title' => 'Ajouter administateur']) ?>
    <?php $this->start('main_content') ?>
        <!-- Formulaire d'ajout administateur -->
        <form class="form-horizontal" action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-xs-4 col-xs-offset-2 col-lg-4 col-lg-offset-2">
                         <?= $message ?>
                        <div class="form-group">
                            <label class="control-label" for="firstname">Nom :</label>
                            <input id="firstname" name="firstname" type="text" class="center-block form-control" placeholder="Nom"> </div>
                        <div class="form-group">
                            <label class="control-label" for="lastname">Prenom :</label>
                            <input id="lastname" name="lastname" type="text" class="center-block form-control" placeholder="Prenom"> </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email :</label>
                            <input id="email" name="email" type="email" class="center-block form-control" placeholder="Email"> </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Mot de passe :</label>
                            <input id="password" name="password" type="password" class="center-block form-control" placeholder="Mot de passe"> </div>
                        <div class="form-group">
                            <label class="control-label" for="cf-password">Confirmer Mot de passe :</label>
                            <input id="cf-password" name="cf-password" type="password" class="center-block form-control" placeholder="Confirmer Mot de passe"> </div>
                        <div class="form-group">
                            <button name="createAdmin" class="center-block btn btn-info btn-sm" placeholder="Ajouter">Ajouter</button>
                            <br>
                            <button type="button" onclick="window.location.href =' <?= $this->url('backoffice_AdminView') ?>'" class="center-block btn btn-success btn-sm">liste des administrateurs</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
      
            <?php $this->stop('main_content') ?>