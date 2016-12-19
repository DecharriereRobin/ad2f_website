
<?php $this->layout('layoutBack', ['title' => 'Liste des lieux']) ?>

<?php $this->start('main_content') ?>

<table class="table table-striped">
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
        <td><a href="<?= $this->url('backoffice_PlaceDelete', ['id' => $place['id']]) ?>">supprimer</a></td>
        <td><a href="<?= $this->url('backoffice_PlaceEdit', ['id' => $place['id']]) ?>">Editer</a></td>
    </tr>

<?php
    }
?>
    </tbody>
</table>


  <a href="<?= $this->url('backoffice_placeCreate') ?>">Ajouter un nouveau lieu</a>

<?php $this->stop('main_content') ?>
