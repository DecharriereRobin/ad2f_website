
<?php $this->layout('layoutBack', ['title' => 'Liste des évenements']) ?>

<?php $this->start('main_content') ?>

<?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
<?php unset($_SESSION['message']); ?>

<div class="col-xs-push-4 col-xs-2">
        <a href="<?= $this->url('backoffice_EventCreate') ?>" class="btn btn-primary text-center" >Créer un nouvel évenement</a>
        <br />
</div>
    
<div class="col-md-9 col-lg-11">
    <table class="table table-hover table-striped">
            <thead>
                <th>#</th>
                <th>Titre</th>
                <th></th>
                <th>Date</th>
                <th>Categorie</th>
                <th></th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach($events as $event){ ?>
                    <tr>
                        <td><?= $event['id'] ?></td>    
                        <td><?= ucfirst($event['title']) ?></td>
                        <td></td>
                        <td><?= (new \DateTime($event['date']))->format('d-m-Y'); ?></td>
                        <td><?= ucfirst($event['category']) ?></td>
                        <td></td>
                        <td>
                            <a href="<?= $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" class="btn btn-primary">Modifier</a>
                           <!-- <a href="" class="btn btn-danger">Supprimer</a>-->
                            <button class="btn btn-danger" type="button"  data-toggle="modal" data-target="#deleteModal-<?= $event['id'] ?>">Supprimer</button>
                            <div class="modal fade" id="deleteModal-<?= $event['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-<?= $event['id'] ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header btn-danger">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="deleteModalLabel-<?= $event['id'] ?>">Supprimer l'événement: <?= ucfirst($event['title']) ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        Voulez-vous vraiment supprimer l'événement ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                                        <a href="<?= $this->url('backoffice_EventDelete', ['id' => $event['id'] , 'page' => $page ]) ?>" class="btn btn-danger">Supprimer l'événement</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</div>
    <nav aria-label="pagination" class="col-xs-push-4 col-xs-6">
      <ul class="pagination">
        <li class="<?php echo ($page == 1) ? 'disabled' : '' ?>"><a href="<?php echo ($page > 1) ? $this->url('backoffice_EventList', ['page' => ($page -1)]) : '' ?>" aria-label="Précédente"><span aria-hidden="true">&laquo;</span></a></li>
        
        <?php 

            for($i = $page - 8; $i <= $page - 1 ; $i++){
    
                if($i >= 1){ ?>
                    <li class="<?= ($i == $page) ? 'active': ''?> "><a href="<?= $this->url('backoffice_EventList', ['page' => $i ]) ?>"><?= $i ?> <span class="sr-only">(current)</span></a></li>
                <?php }
            }
          
            for($i = $page ; $i <= $page + 9 ; $i++){
    
                if($i <= $maxPage){ ?>
                    <li class="<?= ($i == $page) ? 'active': ''?>"><a href="<?= $this->url('backoffice_EventList', ['page' => $i ]) ?>"><?= $i ?> <span class="sr-only">(current)</span></a></li>
                <?php }
            }
          
          ?>
        <li class="<?php echo ($page == $maxPage) ? 'disabled' : '' ?>"><a href="<?php echo ($page < $maxPage) ? $this->url('backoffice_EventList', ['page' => ($page + 1)]) : '' ?>" aria-label="Suivante"><span aria-hidden="true">&raquo;</span></a></li>
      </ul>
    </nav>
    
<?php $this->stop('main_content') ?>


