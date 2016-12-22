<?php $this->layout('layoutBack', ['title' => 'Ajouter administateur']) ?>
    <?php $this->start('main_content') ?>
       <?= $message ?>
            <?php if(!empty($errorMessages)){
            echo '<div class="alert alert-danger">'.implode('<br>', $errorMessages).'</div>';
                }?>
        <!-- Formulaire d'ajout administateur -->
        <form class="form-horizontal" action="<?php $this->url('backoffice_AdminCreate') ?>" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-xs-4 col-xs-offset-2 col-lg-4 col-lg-offset-2">
                         
                        <div class="form-group <?php echo isset($hasError['firstname']) ? $hasError['firstname'] : ""  ?>">
                            <label class="control-label" for="firstname">Nom :</label>
                            <input id="firstname" name="firstname" type="text" class="center-block form-control" placeholder="Nom" value="<?php echo isset($_POST['firstname']) ? ($_POST['firstname']) : "" ?>" /> </div>
                        <div class="form-group <?php echo isset($hasError['lastname']) ? $hasError['lastname'] : ""  ?>">
                            <label class="control-label" for="lastname">Prenom :</label>
                            <input id="lastname" name="lastname" type="text" class="center-block form-control" placeholder="Prenom" value="<?php echo isset($_POST['lastname']) ? ($_POST['lastname']) : "" ?>" /> </div>
                        <div class="form-group <?php echo isset($hasError['email']) ? $hasError['email'] : ""  ?>">
                            <label for="email" class="control-label">Email :</label>
                            <input id="email" name="email" type="email" class="center-block form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? ($_POST['email']) : "" ?>" > </div>
                        <div class="form-group <?php echo isset($hasError['password']) ? $hasError['password'] : ""  ?>">
                            <label class="control-label" for="password">Mot de passe :</label>
                            <input id="password" name="password" type="password" class="center-block form-control" placeholder="Mot de passe"> </div>
                        <div class="form-group <?php echo isset($hasError['cf-password']) ? $hasError['cf-password'] : ""  ?>">
                            <label class="control-label" for="cf-password">Confirmer Mot de passe :</label>
                            <input id="cf-password" name="cf-password" type="password" class="center-block form-control" placeholder="Confirmer Mot de passe"> </div>
                        <div class="form-group">
                            <button name="createAdmin" class="center-block btn btn-success btn-sm" placeholder="Ajouter">Ajouter</button>
                            <br>
                            <button type="button" onclick="window.location.href =' <?= $this->url('backoffice_AdminView') ?>'" class="center-block btn btn-info btn-sm">liste des administrateurs</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>

            <?php $this->stop('main_content') ?>
