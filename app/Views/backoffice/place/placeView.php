<?php $this->layout('layoutBack', ['title' => 'Liste des lieux']) ?>
    <?php $this->start('main_content') ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-xs-9  col-lg-9">
                    
                        
                    
                    <table class="table table-responsive table-striped">
                        <thead>
                            <!-- En-tête du tableau -->
                            <tr>
                                <th class="text-center"><h4>titre</h4></th>
                                <th class="text-center"><h4>contenu</h4></th>
                                <th class="text-center"><h4>adresse</h4></th>
                                <th class="text-center"><h4>categorie</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Corps du tableau -->
                            <?php foreach($places as $place){ ?>
                                <tr>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($place['titre'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <h5><?php echo ucfirst($place['content'])?></h5>
                                    </td>
                                    <td class="text-center">
                                    <h5><?php echo ($place[ 'address'])?></h5>
                                    </td> 
                                    <td class="text-center">
                                        <h5<?php echo ucfirst($place['categorie'])?></h5>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-danger btn-sm" onclick="window.location.href ='<?= $this->url('backoffice_PlaceDelete', ['id' => $place['id']])?>'"
                                        >supprimer</button>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-warning btn-sm" onclick="window.location.href ='<?= $this->url('backoffice_PlaceEdit', ['id' => $place['id']])?>'">Editer</button>
                                    </td>
                                </tr>
                                <?php
    }
?>
                        </tbody>
                    </table>
                    <button class="btn btn-success btn-sm center-block" onclick="window.location.href ='<?= $this->url('backoffice_placeCreate')?>'" >Ajouter un nouveau lieu</button>
                </div>
            </div>
        </div>
        <?php $this->stop('main_content') ?>