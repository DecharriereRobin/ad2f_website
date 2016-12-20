<?php $this->layout('layoutMap', ['title' => 'Carte des lieux du quartier du Faubourg de bethune']) ?>

<?php $this->start('main_content') ?>

<!-- bouton categorie -->
<?php $categorie='';
    foreach($places as $place){
        if ($categorie!=$place['categorie']){
        $categorie=$place['categorie'];
       echo '<form action="map_Showcategorie" method="get">';
       echo '<button type="submit" name="categorie" value="' . $place['categorie']   . '" >'.$place['categorie']. '</button>';
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
        echo '<input type="button" class="centerMap" value="Voir le lieu sur la carte" name="{lat:'. $place['lat'] .', lng:'. $place['lng'] .'}">';
        echo '<br />';
 } ?>

<?php $this->stop('main_content') ?>