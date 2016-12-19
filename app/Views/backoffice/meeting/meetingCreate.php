<?= $this->layout('layoutBack', ['title' => 'Remplir l\'agenda']) ?>
    <?= $this->start('main_content') ?>
        <!--formulaire d'ajout d'une réunion -->
            <br>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <form action="<?php $this->url('backoffice_MeetingCreate')?>" method="POST">
                        <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
                              <?= $message ?>
                            <div class="form-group">
                                <label class="control-label" for="date">Date de l'évenement </label>
                                <input id="date" name="date" type="date" class="form-control calendar" type="date" value="" />
                                <div class="form-group">
                                    <label class="control-label" for="address">Adresse</label>
                                    <input id="content" name="address" class="form-control" type="text"> </div>
                                <div class="form-group">
                                    <label class="control-label" for="content">Description</label>
                                    <input id="content" name="content" class="form-control" type="text"> </div>
                                <button class="center-block btn btn-success" name="createMeeting" placeholder="Insérer">Insérer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php $this->stop('main_content') ?>