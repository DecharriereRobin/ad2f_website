<?= $this->layout('layoutBack', ['title' => 'Liste des riverains inscrits à la braderie']); ?>
    <br>
    <?= $this->start('main_content'); ?>
        <!-- formulaire de listing d'une réunion -->
        <?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
            <?php unset($_SESSION['message']); ?>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 col-xs-9  col-lg-9">
                            <div id="imprimerlaliste" class="imprimerlaliste">
                               <div class="form-group">
                                    <div class="col-md-5 col-xs-5  col-lg-5">
                                        <button class="btn btn-success btn-sm center-block hidden-print" type="button" id="print" onclick="printContent('imprimerlaliste');">Imprimer la liste</button>
                                    </div>
                                    <div class="col-md-6 col-xs-6  col-lg-6 hidden-print">
                                        <button type="button" onclick="window.location.href ='<?= $this->url('backoffice_GarageCreate') ?>';" class="center-block btn btn-success btn-sm">Ajouter un participant </button>
                                    </div><br>
                                </div>
                                <table class="table table-responsive table-striped center-block">
                                    <thead>
                                        <!-- En-tête du tableau -->
                                        <tr>
                                            <th class="text-center">
                                                <h4>Prénom</h4></th>
                                            <th class="text-center">
                                                <h4>Nom</h4></th>
                                            <th class="text-center">
                                                <h4>Adresse</h4></th>
                                            <th class="text-center">
                                                <h4>Email</h4></th>
                                            <th class="text-center">
                                                <h4>Numéro de téléphone</h4></th>
                                            <th class="text-center">
                                                <h4>Nombre de mètres résérvés</h4></th>
                                            <th class="text-center">
                                                <h4>Adhesion(oui/non)</h4></th>
                                            <th class="text-center">
                                                <h4>Période</h4></th>
                                            <th class="text-center">
                                                <h4>Montant</h4></th>
                                            <th class="text-center">
                                                <h4>Montant déjà payé</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Corps du tableau -->
                                        <?php
    foreach($garages as $garage){
?>
                                            <tr>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($garage['firstname'])?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($garage['lastname'])?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($garage['address'])?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($garage['email'])?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo $garage['phone']?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo $garage['reservedmeters']?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo $garage['adhesion']?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo $garage['period']?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo $garage['amount']?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo $garage['total_amount_paid']?></h5> </td>
                                                <td class="text-center"> <a href="<?= $this->url('backoffice_GarageEdit', ['id' => $garage['id']]) ?>" class="btn btn-warning btn-sm hidden-print" name="editGarage">Editer</a> </td>
                                                <td class="text-center"> <a href="<?= $this->url('backoffice_GarageDelete', ['id' => $garage['id']]) ?>" class="btn btn-danger btn-sm hidden-print" name="deleteGarage">Supprimer</a> </td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->stop('main_content') ?>