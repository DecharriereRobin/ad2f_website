<?php $this->layout('layout', ['title' => 'Liste des membres']) ?>

<?php $this->start('main_content') ?>

<?php
    echo '<h3>Nombre d\'adhérents à l\'association : '.  $sum .'</h3>';
?>

<table class="table table-striped">

    <caption>Informations sur les adhérents de l'association</caption>

    <thead> <!-- En-tête du tableau -->
    <tr>
        <th><a href="<?php echo $membersAsc  ?>">Nom</a></th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Date d'inscription</th>
        <th>Date de paiement</th>
        <th>Paiement</th>
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->
    
<?php
    foreach($members as $member){
?>
    <tr>
        <td><?php echo ucfirst($member['firstname'])               ?></td>
        <td><?php echo ucfirst($member['lastname'])                ?></td>
        <td><?php echo ucfirst($member['address'])                 ?></td>
        <td><?php echo ucfirst($member['phone'])                   ?></td>
        <td><?php echo ucfirst($member['email'])                   ?></td>
        <td><?php echo ucfirst($member['creation_date'])           ?></td>
        <td><?php echo ucfirst($member['subscription_date'])       ?></td>
        <td><?php echo \Model\MembersModel::getPaidStatus($member) ?></td>
    </tr>
<?php
        
    }
?>
    </tbody>
</table>





<?php $this->stop('main_content') ?>
