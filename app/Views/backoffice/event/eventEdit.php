<?php $this->layout('layoutBack', ['title' => 'Editer evenement '.$event['title']]) ?>
    <?php $this->start('main_content') ?>
            <br>
            <br />
            <form action="<?php $this->url('backoffice_EventEdit', ['id' => $event['id']])?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                           <?= $message /*Return message On success Or on Error*/ ?>
                            <div class=" text-center form-group">
                                <label class="control-label" for="title">Titre de l'évenement: </label>
                                <input id="title" name="title" type="text" class="center-block form-control" value="<?= $event['title']?> " /> </div>
                            <div class="text-center form-group">
                                <label class="control-label" for="category">Catégorie</label>
                                <select class="form-control" id="category" name="category">
                                    <option <?php echo $event[ 'category']=='braderie' ? 'selected="selected' : NULL ?> value="braderie">Braderie</option>
                                    <option <?php echo $event[ 'category']=='carnaval' ? 'selected="selected' : NULL ?>value="carnaval">Carnaval</option>
                                    <option <?php echo $event[ 'category']=='Fete-de-quartier' ? 'selected="selected' : NULL ?>value="Fete-de-quartier">Fete de quartier</option>
                                </select>
                            </div>
                            <div class="text-center form-group">
                                <label for="content">Description</label>
                                <textarea id="content" name="content" class="form-control" rows="12">
                                    <?= $event['content']?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <?php $dateTime = $event['date']?>
                                    <label for="date">Date </label>
                                    <input id="date" name="date" type="date" class="form-control calendar" value="<?= $dateTime ?>" /> </div>
                            <br>
                            <button class="btn btn-primary btn-sm center-block" placeholder="Modifier" name="editEvent">Modifier l'évenement</button><br>
                            <button type="button" onclick="window.location.href ='<?= $this->url('backoffice_EventList') ?>';" class=" btn btn-info btn-sm center-block">Revenir à la liste </button>
                        </div>
                    </div>
                </div>
            </form>
                <?php $this->stop('main_content') ?>