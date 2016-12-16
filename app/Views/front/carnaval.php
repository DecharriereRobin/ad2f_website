<?php $this->layout('layout', ['title' => 'Information sur le carnaval des 2 faubourg']) ?>

<?php $this->start('main_content') ?>

<!--Liste des evenements-->
<?php

             foreach($events as $event){
                 if ($event['category'] == 'Fete-de-quartier'){
                     $id = $event['id'];
                     echo ucfirst($event['title']);
                     echo (new \DateTime($event['date']))->format('d-m-Y');
                     echo ucfirst($event['content']);
                     $path = $media->imageEvent($id);
                      echo '<img src= "../..' .$path['path'] .'" alt="" >';
                 }
		}


                ?>

<?php $this->stop('main_content') ?>
