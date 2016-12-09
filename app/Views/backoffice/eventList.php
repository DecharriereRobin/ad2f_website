
<?php $this->layout('layoutBack', ['title' => 'Liste des évenements']) ?>

<?php $this->start('main_content') ?>

<table class="table table-hover table-striped">
        <thead>
            <th>#</th>
            <th><a href="" data-toggle="tooltip" data-placement="top" title="Cliquez pour trier par titre">Title</a></th>
            <th>Date</th>
            <th>Categorie</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($events as $key  => $event){ ?>
                <tr>
                    <td><?= $event['id'] ?></td>
                    <td><?= $event['title'] ?></td>
                    <td><?= $event['date'] ?></td>
                    <td><?= $event['category'] ?></td>
                    <td>
                        <a href="<?= $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('backoffice_EventDelete', ['id' => $event['id']]) ?>" class="btn btn-danger">Supprimer</a>
                        <!--<button class="btn btn-default" data-toggle="modal" data-target="#deleteModal-">Supprimer</button>-->
                        <div class="modal fade" id="deleteModal-<?= $event['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-<?= $event['id'] ?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="deleteModalLabel-<?= $event['id'] ?>">Êtes-vous sûr de vouloir supprimer l'événement ?</h4>
                                </div>
                                <div class="modal-body">
                                    Êtes-vous sûr de vouloir supprimer l'événement ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                                    <a href="" class="btn btn-primary">Oui</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php var_dump($_SESSION); unset($_SESSION['message']); ?>
<?php $this->stop('main_content') ?>
