<?php $this->layout('layoutBack', ['title' => 'Editer un administrateurs']) ?>
    <?php $this->start('main_content') ?>
        <p>Pour l edition, le mot de passe n'est pas obligatoire</p>
        <!-- Formulaire d'edition d'un administateur -->
        <form action="<?php $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-push-3 col-sm-4">
                            <label for="firstname" class="control-label">Nom :</label>
                            <input value="<?= $admin['firstname'] ?>" id="firstname" name="firstname" type="text" class="center-block form-control" placeholder="Nom"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-push-3 col-sm-4">
                            <label class="control-label" for="lastname">Prenom :</label>
                            <input value="<?= $admin['lastname'] ?>" id="lastname" name="lastname" type="text" class="center-block form-control" placeholder="Prenom"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-push-3 col-sm-4">
                            <label for="email" class="control-label">Email :</label>
                            <input value="<?= $admin['email'] ?>" id="email" name="email" type="email" class="center-block form-control"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-push-3 col-sm-4">
                            <label for="password" class="control-label">Mot de passe :</label>
                            <input id="password" name="password" type="password" class="center-block form-control" placeholder="Mot de passe"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-push-3 col-sm-4">
                            <label for="cf-password" class="control-label">Confirmer Mot de passe :</label>
                            <input id="cf-password" name="cf-password" type="password" class="center-block form-control" Placeholder="Mot de passe"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-push-3 col-sm-4">
                            <button name="EditAdmin" class="center-block btn btn-warning" type="button">Ajouter</button>
                            <br> <a href="<?= $this->url('backoffice_AdminView') ?>" class="center-block btn btn-success">liste des administrateurs</a> </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>
        <?= $message ?>
            <?php $this->stop('main_content') ?>