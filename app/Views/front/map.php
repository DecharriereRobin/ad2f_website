<?php $this->layout('layoutMap', ['title' => 'Carte des lieux du quartier du Faubourg de bethune']) ?>

<?php $this->start('main_content') ?>


<p>Recherche</p>
<div>
    <input id="address" type="textbox" value="Sydney, NSW">
    <input type="button" value="Voir le lieu sur la carte" onclick="codeAddress()">
  </div>

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

        echo '<input type="button" value="Voir le lieu sur la carte" onclick="codeAddress()">';
 } ?>

<?php $this->stop('main_content') ?>
