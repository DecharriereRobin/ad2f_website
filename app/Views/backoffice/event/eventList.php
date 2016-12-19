<?php $this->layout('layoutBack', ['title' => 'Liste des évenements']) ?>
    <?php $this->start('main_content') ?>
        <?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
            <?php unset($_SESSION['message']); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 col-xs-9  col-lg-9">
                            <table class="table table-hover table-responsive table-striped">
                                <thead>
                                    <th class="text-center"><h4>N°</h4></th>
                                    <th class="text-center"><h4>Titre</h4></th>
                                    <th class="text-center"><h4>Date</h4></th>
                                    <th class="text-center"><h4>Categorie</h4></th>
                                    <th class="text-center"><h4>Actions</h4></th>
                                </thead>
                                <tbody>
                                    <?php foreach($events as $event){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <h5><?= $event['id'] ?></h5>
                                            </td>
                                            <td class="text-center">
                                                <h5><?= ucfirst($event['title']) ?></h5>
                                            </td>
                                            <td class="text-center">
                                                <h5><?= (new \DateTime($event['date']))->format('d-m-Y'); ?></h5>
                                            </td>
                                            <td class="text-center">
                                                <h5><?= ucfirst($event['category']) ?></h5>
                                            </td>
                                            <td class="text-center"> <a href="<?= $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" class="btn btn-primary btn-sm">Modifier</a> <a href="<?= $this->url('backoffice_EventDelete', ['id' => $event['id'] , 'page' => $page ]) ?>" class="btn btn-danger btn-sm">Supprimer</a> </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-3 col-md-offset-4 col-xs-3 col-xs-offset-4 col-lg-3 col-lg-offset-4">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="<?php echo ($page == 1) ? 'disabled' : '' ?>"><a href="<?php echo ($page > 1) ? $this->url('backoffice_EventList', ['page' => ($page -1)]) : '' ?>" aria-label="Précédente"><span aria-hidden="true">&laquo;</span></a></li>
                                                    <?php 
            for($i = $page - 2; $i <= $page + 1 ; $i++){
    
                if($i >= 1){ ?>
                                                        <li class="<?= ($i == $page) ? 'active': ''?> ">
                                                            <a href="<?= $this->url('backoffice_EventList', ['page' => $i ]) ?>">
                                                                <?= $i ?> <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <?php }
            }
          
            for($i = $page + 2; $i <= $page + 3 ; $i++){
    
                if($i <= $maxPage){ ?>
                                                            <li class="<?= ($i == $page) ? 'active': ''?>">
                                                                <a href="<?= $this->url('backoffice_EventList', ['page' => $i ]) ?>">
                                                                    <?= $i ?> <span class="sr-only">(current)</span></a>
                                                            </li>
                                                            <?php }
            }       
          ?>
                                                                <li class="<?php echo ($page == $maxPage) ? 'disabled' : '' ?>"><a href="<?php echo ($page < $maxPage) ? $this->url('backoffice_EventList', ['page' => ($page + 1)]) : '' ?>" aria-label="Suivante"><span aria-hidden="true">&raquo;</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="col-md-3 col-md-offset-3 col-xs-3 col-xs-offset-3 col-lg-3 col-lg-offset-3">
                                    <button onclick="window.location.href='<?= $this->url('backoffice_EventCreate') ?>'" class="center-block btn btn-primary btn-sm">Créer un nouvel évenement</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->stop('main_content') ?>