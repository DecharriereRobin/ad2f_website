<?= $this->layout('layoutBack', ['title' => 'Supprimer des reunions']) ?>
    <?= $this->start('main_content') ?>
        <!-- formulaire de suppression d'une réunion -->
        <?= $message ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 col-xs-4 col-xs-offset-1 col-lg-4 col-lg-offset 1">
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
                                        <td> <a class="btn btn-danger" href="<?= $this->url('backoffice_meetingDelete', ['id' => $meeting['id']]) ?>" name="deleteMeeting">Effacer</a> </td>
                                    </tr>
                                    <?php
    }
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?= $this->stop('main_content') ?>