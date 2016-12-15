<?= $this->layout('layoutBack', ['title' => 'Supprimer des reunions']) ?>
    <?= $this->start('main_content') ?>
        <!-- formulaire de suppression d'une réunion -->
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
                <?php
    foreach($meetings as $meeting){
?>
                    <tr>
                        <td>
                            <?php echo ucfirst($meeting['date'])?>
                        </td>
                        <td>
                            <?php echo ucfirst($meeting['address'])?>
                        </td>
                        <td>
                            <?php echo ucfirst($meeting['content'])?>
                        </td>
                        <td> <a href="<?= $this->url('backoffice_MeetingsDelete', ['id' => $meeting['id']]) ?>">Effacer</a> </td>
                    </tr>
                    <?php
    }
?>
            </tbody>
        </table>
        <?= $this->stop('main_content') ?>