<?php $this->layout('layout', ['title' => 'Information sur le carnaval des 2 faubourg']) ?>

<?php $this->start('main_content') ?>



<!--Liste des evenements-->
<?php
             foreach($events as $event){
				 if ($event['category']== 'carnaval'){
		             echo ucfirst($event['title']);
					 echo (new \DateTime($event['date']))->format('d-m-Y');
					 echo ucfirst($event['content']);
                     echo '<img src= "../upload/plan du quartier-15-12-2016-5852be37b7732.png " alt="" >';
			}
		}
                     var_dump($event[media_id]);
                ?>

<?php $this->stop('main_content') ?>
