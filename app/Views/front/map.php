<?php $this->layout('layoutMap', ['title' => 'Carte des lieux du quartier du Faubourg de bethune']) ?>

<?php $this->start('main_content') ?>

<!-- bouton categorie -->
<?php $categorie='';
    foreach($places as $place){
        if ($categorie!=$place['categorie']){
        $categorie=$place['categorie'];
       echo '<button type="submit" name="essai">'.$place['categorie'].'</button>';
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

        echo '<input type="button" name "lieu" value="Voir le lieu sur la carte" onclick="viewplace()">';
 } ?>

<?php $this->stop('main_content') ?>
