<?= $this->layout('layoutBack', ['title' => 'Liste des réunions']); ?>
    <?= $this->start('main_content'); ?>
        <!-- formulaire de listing d'une réunion -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-xs-10  col-lg-10">
                    <?php echo isset($_SESSION['message'])? "<div class='alert alert-success'>".($_SESSION['message'])."</div>" : NULL  ?>
                        <?php unset($_SESSION['message']); ?>
                            <div id="imprimerlaliste">
                               <button class="btn btn-info btn-sm center-block hidden-print" id="print" onclick="printContent('imprimerlaliste');">Imprimer la liste</button>
                                <table class="table table-striped">
                                    <thead>
                                        <!-- En-tête du tableau -->
                                        <tr>
                                            <th class="text-center">
                                                <h4>Date</h4></th>
                                            <th class="text-center">
                                                <h4>Adresse de la réunion</h4></th>
                                            <th class="text-center">
                                                <h4>Sujet de la réunion</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Corps du tableau -->
                                        <?php
    foreach($meetings as $meeting){
?>
                                            <tr>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($meeting['date'])?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($meeting['address'])?></h5> </td>
                                                <td class="text-center">
                                                    <h5><?php echo ucfirst($meeting['content'])?></h5> </td>
                                                <td class="text-center"> <a href="<?= $this->url('backoffice_MeetingEdit', ['id' => $meeting['id']]) ?>" class="btn btn-warning btn-sm hidden-print" name="editMeeting">Editer</a> </td>
                                                <td class="text-center"> <a href="<?= $this->url('backoffice_MeetingDelete', ['id' => $meeting['id']]) ?>" class="btn btn-danger btn-sm hidden-print" name="deleteMeeting">Supprimer</a> </td>
                                            </tr>
                                            <?php
    }
?>
                                    </tbody>
                                </table>
                            </div>
                            
                </div>
            </div>
        </div>
        <?= $this->stop('main_content') ?>