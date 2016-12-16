<?= $this->layout('layoutBack', ['title' => 'Liste des réunions']); ?>
    <?= $this->start('main_content'); ?>
        <!-- formulaire de listing d'une réunion -->
      <?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
<?php unset($_SESSION['message']); ?>
           <div id="imprimerlaliste">
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
                            <td> <a href="<?= $this->url('backoffice_MeetingDelete', ['id' => $meeting['id']]) ?>" class="btn btn-danger hidden-print" name="deleteMeeting">Supprimer</a> </td>
                            <td> <a href="<?= $this->url('backoffice_MeetingEdit', ['id' => $meeting['id']]) ?>" class="btn btn-success hidden-print" name="editMeeting">Editer</a> </td>
                        </tr>
                        <?php
    }
?>
                </tbody>
            </table>
</div>
                <button class="btn btn-success" id="print" onclick="printContent('imprimerlaliste');">Imprimer la liste</button>
            <?= $this->stop('main_content') ?>