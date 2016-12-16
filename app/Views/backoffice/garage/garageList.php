<?= $this->layout('layoutBack', ['title' => 'Liste des riverains inscrits à la braderie']); ?>
    <br>
    <?= $this->start('main_content'); ?>
      
        <!-- formulaire de listing d'une réunion -->
        <?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
            <?php unset($_SESSION['message']); ?>
                  <br>
                   <div id="imprimerlaliste">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <!-- En-tête du tableau -->
                            <tr>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Email</th>
                                <th>Numéro de téléphone</th>
                                <th>Nombre de mètres résérvés</th>
                                <th>Adhesion(oui/non)</th>
                                <th>Période</th>
                                <th>Montant</th>
                                <th>Montant déjà payé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Corps du tableau -->
                            <?php
    foreach($garages as $garage){
?>
                                <tr>
                                    <td>
                                        <?php echo ucfirst($garage['firstname'])?>
                                    </td>
                                    <td>
                                        <?php echo ucfirst($garage['lastname'])?>
                                    </td>
                                    <td>
                                        <?php echo ucfirst($garage['address'])?>
                                    </td>
                                    <td>
                                        <?php echo ucfirst($garage['email'])?>
                                    </td>
                                    <td>
                                        <?php echo $garage['phone']?>
                                    </td>
                                    <td>
                                        <?php echo $garage['reservedmeters']?>
                                    </td>
                                    <td>
                                        <?php echo $garage['adhesion']?>
                                    </td>
                                    <td>
                                        <?php echo $garage['period']?>
                                    </td>
                                    <td>
                                        <?php echo $garage['amount']?>
                                    </td>
                                    <td>
                                        <?php echo $garage['total_amount_paid']?>
                                    </td>
                                    <td> <a href="<?= $this->url('backoffice_GarageDelete', ['id' => $garage['id']]) ?>" class="btn btn-danger hidden-print" name="deleteGarage" >Supprimer</a> </td>
                                    <td> <a href="<?= $this->url('backoffice_GarageEdit', ['id' => $garage['id']]) ?>" class="btn btn-warning hidden-print" name="editGarage">Editer</a> </td>
                                </tr>
                                <?php
    }
?>
                        </tbody>
                    </table>
</div>
            <div class="form-group">    
                <button class="btn btn-success center-block" type="button" id="print" onclick="printContent('imprimerlaliste');">Imprimer la liste</button>
            </div>
                <?= $this->stop('main_content') ?>