<?php $this->layout('layoutBack', ['title' => 'Liste des membres']) ?>
    <?php $this->start('main_content') ?>
        <?php echo '<h3>Nombre d\'adhérents à l\'association : '.  $sum .'</h3>';?><br>
            <div id="imprimerlaliste">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 col-xs-10  col-lg-10">
                            <?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
                                <?php unset($_SESSION['message']); ?>
                                   <div class="form-group">
                                    <div class="col-md-5 col-md-offset-1 col-xs-5 col-xs-offset-1 col-lg-5 col-lg-offset-1 hidden-print">
                                       <button type="button" onclick="window.location.href ='<?= $this->url('backoffice_MemberCreate') ?>';" class=" btn btn-success btn-sm">Ajouter un participant </button>
                                        
                                    </div>
                                    <div class="col-md-6 col-xs-6 col-lg-6 hidden-print">
                                        <button class="btn btn-info btn-sm" type="button" id="print" onclick="printContent('imprimerlaliste');">Imprimer la liste</button>
                                    </div><br>
                                </div>
                                    
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <!-- En-tête du tableau -->
                                            <tr>
                                                <th class="text-center">
                                                    <h4>Nom</h4></th>
                                                <th class="text-center">
                                                    <h4>Prénom</h4></th>
                                                <th class="text-center">
                                                    <h4>Adresse</h4></th>
                                                <th class="text-center">
                                                    <h4>Téléphone</h4></th>
                                                <th class="text-center">
                                                    <h4>Email</h4></th>
                                                <th class="text-center">
                                                    <h4>Inscription</h4></th>
                                                <th class="text-center">
                                                    <h4>Paiement</h4></th>
                                                <th class="text-center">
                                                    <h4>Date de paiement</h4></th>
                                                <th class="text-center hidden-print">
                                                    <h4>Actions</h4></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Corps du tableau -->
                                            <?php foreach($members as $member){?>
                                                <tr>
                                                    <td class="text-center">
                                                        <h5><?= ucfirst($member['firstname'])?></h5> </td>
                                                    <td class="text-center">
                                                        <h5><?= ucfirst($member['lastname'])?></h5> </td>
                                                    <td class="text-center">
                                                        <h5><?= ucfirst($member['address'])?></h5> </td>
                                                    <td class="text-center">
                                                        <h5><?= $member['phone']?></h5> </td>
                                                    <td class="text-center">
                                                        <h5><?= $member['email']?></h5> </td>
                                                    <td class="text-center">
                                                        <h5><?= (new \DateTime($member['creation_date']))->format('d-m-Y'); ?></h5> </td>
                                                    <td class="text-center">
                                                        <h5  style="padding-bottom:-1.5%"><?= \Model\MemberModel::getPaidStatus($member) ?></h5> </td>
                                                    <td class="text-center">
                                                        <h5><?= (new \DateTime($member['subscription_date']))->format('d-m-Y'); ?></h5> </td>
                                                    <td> <a href="<?= $this->url('backoffice_MemberEdit', ['id' => $member['id']])?>" class="btn btn-primary btn-sm hidden-print">Modifier</a> </td>
                                                    <td> <a href="<?= $this->url('backoffice_MemberDelete', ['id' => $member['id']]) ?>" class="btn btn-danger btn-sm hidden-print">Supprimer</a> </td>
                                                    <?php
        
    }
?>
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->stop('main_content') ?>