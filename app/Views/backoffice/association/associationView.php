<?php $this->layout('layoutBack', ['title' => 'Informations sur l association']) ?>
    <?php $this->start('main_content') ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-xs-10   col-lg-10">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <!-- En-tête du tableau -->
                            <tr>
                                <th class="text-center"><h4>Nom</h4></th>
                                <th class="text-center"><h4>Adresse</h4></th>
                                <th class="text-center"><h4>Code postal</h4></th>
                                <th class="text-center"><h4>Ville</h4>
                                <th class="text-center"><h4>telephone</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Corps du tableau -->
                            <?php foreach($associations as $association){ ?>
                                <tr>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($association['name'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ($association['address'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ($association['ZIP_code'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($association['city'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($association['phone'])?></h5>
                                    </td>
                                    <td class="text-center"> <a style="padding-top: 1.5%" href="<?= $this->url('backoffice_AssociationEdit', ['id' => $association['id']]) ?>" class="center-block btn btn-success btn-sm hidden-print" name="EditProfil">Editer</a> </td>
                                </tr>
                                <?php
    }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php $this->stop('main_content') ?>