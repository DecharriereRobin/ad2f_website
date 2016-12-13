<?php $this->layout('layoutMap', ['title' => 'Carte des lieux du quartier du Faubourg de bethune']) ?>

<?php $this->start('main_content') ?>

<?php $this->stop('main_content') ?>


<?php $this->start('script_content') ?>
<p>Liste des lieux</p>
<?php foreach($places as $place){ ?>

<?php } ?>





<?php foreach($places as $place){ ?>
    <tr>
        <td><?php echo ucfirst($place['categorie'])                   ?></td>
        <?php echo "<br /" ?>
        <td><?php echo ucfirst($place['titre'])               ?></td>
        <?php echo "<br /" ?>
        <td><?php echo ucfirst($place['content'])                ?></td>
        <?php echo "<br /" ?>
        <td><?php echo ($place['address'])                 ?></td>
        <?php echo "<br /" ?>
    </tr>
    <?php
        }
    ?>
<?php $this->stop('script_content') ?>
