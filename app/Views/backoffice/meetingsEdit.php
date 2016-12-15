<?php $this->layout('layoutBack', ['title' => 'Editer réunion ']) ?>
    <?php $this->start('main_content') ?>
        <!-- formulaire de listing d'une réunion -->
        <table class="table table-striped">
            <thead>
                <!-- En-tête du tableau -->
                <tr>
                    <th>Date</th>
                    <th>Adresse de la réunion</th>
                    <th>Sujet de la réunion</th>
                </tr>
            </thead>
            <tbody>
                <!-- Corps du tableau -->
                <tr>
                    <td>
                        <?= $meeting['date'] ?>
                    </td>
                    <td>
                        <?= $meeting['address'] ?>
                    </td>
                    <td>
                        <?= $meeting['content'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <form action="<?php $this->url('backoffice_MeetingsEdit')?>" method="POST">
            <div class="form-group">
                <label for="date">Modifier la date de la réunion : </label>
                <input id="date" value="<?= $meeting['date'] ?>" name="date" type="date" class="form-control calendar" /> </div>
            <div class="form-group">
                <label for="adress">Modifier l'adresse de la réunion : </label>
                <input id="adress" name="address" type="text" class="form-control" /> </div>
            <div class="form-group">
                <label for="content">Modifier la description</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-default" name="editMeetings">Modifier la ligne</button>
            </div>
        </form>
        <?php $this->stop('main_content') ?>