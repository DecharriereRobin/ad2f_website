<?php $this->layout('layoutBack', ['title' => 'Editer réunion ']) ?>
    <?php $this->start('main_content') ?>
        <!-- formulaire de listing d'une réunion -->
        <?= $message ?>
           <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-xs-9 col-lg-9">
            <table class="table table-striped">
                <thead>
                    <!-- En-tête du tableau -->
                    <tr>
                        <th class="text-center"><h4>Date</h4></th>
                        <th class="text-center"><h4>Adresse de la réunion</h4></th>
                        <th class="text-center"><h4>Sujet de la réunion</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Corps du tableau -->
                    <tr>
                        <td class="text-center">
                            <h5><?= $meeting['date'] ?></h5>
                        </td>
                        <td class="text-center">
                            <h5><?= $meeting['address'] ?></h5>
                        </td>
                        <td class="text-center">
                            <h5><?= $meeting['content'] ?></h5>
                        </td>
                    </tr>
                </tbody>
                        </table></div>
        
                    <div class="col-md-4 col-md-offset-2 col-xs-4 col-xs-offset-2 col-lg-4 col-lg-offset 2">
            <form action="<?php $this->url('backoffice_MeetingEdit')?>" method="POST">
                <div class=" text-center form-group">
                    <label for="date">Modifier la date de la réunion : </label>
                    <input id="date" value="<?= $meeting['date'] ?>" name="date" type="date" class="text-center form-control calendar" /> </div>
                <div class="text-center form-group">
                    <label for="adress">Modifier l'adresse de la réunion : </label>
                    <textarea id="content" name="address" class="text-center form-control"><?= $meeting['address'] ?></textarea></div>
                <div class="text-center form-group">
                    <label for="content">Modifier la description</label>
                    <textarea id="content" name="content" class="text-center form-control"><?= $meeting['content'] ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning" name="editMeeting">Modifier la ligne</button>
                </div>
                        </form></div></div></div>
            <?php $this->stop('main_content') ?>