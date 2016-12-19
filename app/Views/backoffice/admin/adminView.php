<?php $this->layout('layoutBack', ['title' => 'Liste des  administrateurs du site']) ?>
    <?php $this->start('main_content') ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-xs-8 col-lg-8">
                    <table class="table table-striped table-responsive">
                        <caption>Informations sur les membres du CA de l'association</caption>
                        <thead>
                            <!-- En-tête du tableau -->
                            <tr>
                                <th class="text-center"><h4>Nom</h4></th>
                                <th class="text-center"><h4>Prenom</h4></th>
                                <th class="text-center"><h4>Email</h4></th>
                                <th class="text-center"><h4>Rôle</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Corps du tableau -->
                            <?php foreach($admins as $admin){ ?>
                                <tr>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($admin['lastname'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($admin['firstname'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ($admin['email'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($admin['role'])?></h5>
                                    </td>
                                    <td class="text-center"><a href="<?= $this->url('backoffice_AdminDelete', ['id' => $admin['id']]); ?>" class="center-block btn btn-danger btn-sm">supprimer</a></td>
                                    <td class="text-center"><a href="<?= $this->url('backoffice_AdminEdit', ['id' => $admin['id']]); ?>" class="center-block btn btn-warning btn-sm">Editer</a></td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>
                    <button onclick="window.location.href =' <?= $this->url('backoffice_AdminCreate') ?>'" class="center-block btn btn-success btn-sm">Ajouter un nouveau membre du CA</button>
                </div>
            </div>
            <?php $this->stop('main_content') ?>
        </div>