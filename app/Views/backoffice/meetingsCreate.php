<?= $this->layout('layoutBack', ['title' => 'Remplir l\'agenda']) ?>
    <?= $this->start('main_content') ?>
        <!--formulaire d'ajout d'une réunion -->
        <?= $message ?>
            <form class="form-group" action="<?php $this->url('backoffice_MeetingsCreate')?>" method="POST">
                <div class="form-group">
                    <label for="date">Date de l'évenement </label>
                    <input id="date" name="date" type="date" class="form-control calendar" value="" /> </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <textarea id="content" name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea id="content" name="content" class="form-control"></textarea>
                </div>
                <button class="btn btn-default" name="createMeetings">Inserer</button>
            </form>
            <?php $this->stop('main_content') ?>