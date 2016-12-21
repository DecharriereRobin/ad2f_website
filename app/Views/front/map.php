<?php $this->layout('layoutMap', ['title' => 'Carte des lieux du quartier du Faubourg de bethune']) ?>

<div id="map"></div>
<?php $this->start('main_content') ?>

<!-- bouton categorie -->
<?php $categorie='';
    foreach($places as $place){
        if ($categorie!=$place['categorie']){
        $categorie=$place['categorie'];
       echo '<form action="'. $place['categorie'].'" method="get">';
       echo '<button type="submit" >'.$place['categorie'].'</button>';
       echo '</form>';
                        }
   }
?>
<p>Liste des lieux</p>
<?php $categorie='';
 foreach($places as $place){
    if ($categorie!=$place['categorie']){
         $categorie=$place['categorie'];
        echo '<h1>'.$place['categorie'].'</h1>';
    }
        echo '<hr></hr>';
		echo $place['titre'];
        echo "<br />";
        echo $place['content'];
        echo "<br />";
        echo $place['address'];

        echo '<input type="button" class="centerMap" "lieu'. $place['id'] . '" value="Voir le lieu sur la carte">';
 } ?>

<?php $this->stop('main_content') ?>
