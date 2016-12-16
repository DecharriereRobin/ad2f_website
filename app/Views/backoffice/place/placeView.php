
<?php $this->layout('layoutBack', ['title' => 'Liste des lieux']) ?>

<?php $this->start('main_content') ?>
<br>

<table class="table table-responsive table-striped">
    <caption>Informations sur les lieux</caption>
    <thead> <!-- En-tête du tableau -->
    <tr>
        <th>titre</th>
        <th>contenu</th>
        <th>adresse</th>
        <th>categorie</th>
    </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->

<?php foreach($places as $place){ ?>
    <tr>
        <td><?php echo ucfirst($place['titre'])               ?></td>
        <td><?php echo ucfirst($place['content'])                ?></td>
        <td><?php echo ($place['address'])                 ?></td>
        <td><?php echo ucfirst($place['categorie'])                ?></td>
        <td><button class="btn btn-success" href="<?= $this->url('backoffice_PlaceDelete', ['id' => $place['id']]) ?>">supprimer</button></td>
        <td><button class="btn btn-warning" href="<?= $this->url('backoffice_PlaceEdit', ['id' => $place['id']]) ?>">Editer</button></td>
    </tr>

<?php
    }
?>
    </tbody>
</table>


  <button class="btn btn-danger"href="<?= $this->url('backoffice_placeCreate') ?>">Ajouter un nouveau lieu</button>

<?php $this->stop('main_content') ?>
