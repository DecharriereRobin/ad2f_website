<?php $this->layout('layout', ['title' => 'Information sur les braderies']) ?>

<?php $this->start('main_content') ?>

<!--Liste des evenements-->
<?php
             foreach($events as $event){
				 if ($event['category']== 'braderie'){
                     $id = $event['id'];
                     //var_dump ($id);
		             echo ucfirst($event['title']);
					 echo (new \DateTime($event['date']))->format('d-m-Y');
					 echo ucfirst($event['content']);
                     $path = $media->imageEvent($id);
                     var_dump($path);
                     //echo '<img src= "' .$path .'" alt="" >';
			}

		}


                ?>

<?php $this->stop('main_content') ?>
