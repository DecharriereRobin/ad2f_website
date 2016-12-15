<?php $this->layout('layout', ['title' => 'Liste des reunions']) ?>

<?php $this->start('main_content') ?>
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
                        </tr>
                        <?php
    }
?>
                </tbody>
            </table>

<?php $this->stop('main_content') ?>
