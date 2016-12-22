<?php $this->layout('layoutMap', ['title' => 'Carte des lieux du quartier du Faubourg de bethune']) ?>

<div id="map"></div>
<?php $this->start('main_content') ?>


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
        echo "<a  class='centerMap' href='" . $this->url('map_JSONbyID', ['id' => $place['id']])."'>Voir le lieu</a>";

 } ?>

<?php $this->stop('main_content') ?>
