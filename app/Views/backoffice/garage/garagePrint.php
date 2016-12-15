<?= $this->layout('layoutBack', ['title' => 'Liste des riverains inscrits à la braderie']); ?>
    <?= $this->start('main_content'); ?>
    
    <table class="table table-striped">
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
                        <th>Numéro de carte d'identité</th>
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
                                <?php echo ucfirst($garage['identification_card_id'])?>
                            </td>
                             <td>
                                <?php echo $garage['amount']?>    
                            </td>
                             <td>
                                <?php echo $garage['total_amount_paid']?>
                            </td>   
                        </tr>
                        <?php
    }
?>
                </tbody>
            </table>
           
        <form method="post">
        <input type="button" value="imprimer" onclick="PrintFile();"/>
        <iframe id="fichierpdf" src="" name="fichierpdf" type="application/pdf" style="width: 0px; height: 0px"></iframe>
        </form>
            <?= $this->stop('main_content') ?>
            <script language="javascript" type="text/javascript">       
    function PrintFile()
    {
        fichierpdf.print();
    }
    </script>
            
             
