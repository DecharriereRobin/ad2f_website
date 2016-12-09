<?php $this->layout('layoutBack', ['title' => 'Liste des réunions']) ?>

<?php $this->start('main_content') ?>

<table class="table table-striped">

    <thead> <!-- En-tête du tableau -->
    <tr>
        <th>Date</th>
        <th>Adresse de la réunion</th>
        <th>Sujet de la réunion</th>
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->
    
<?php
    foreach($meetings as $meeting){
?>
    <tr>
        <td><?php echo ucfirst($meeting['date'])?></td>
        <td><?php echo ucfirst($meeting['address'])?></td>
        <td><?php echo ucfirst($meeting['content'])?></td>
        <td><a name="deleteMeeting" href="<?= $this->url('backoffice_MeetingsDelete', ['id' => $meeting['id']]) ?>" class="btn btn-danger">Effacer</a></td>
        
    </tr>
<?php
        
    }

?>
    </tbody>
</table>

<?php $this->stop('main_content') ?>
