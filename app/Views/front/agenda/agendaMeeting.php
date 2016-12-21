<?php $this->layout('layout', ['title' => 'Liste des reunions']) ?>

<?php $this->start('main_content') ?>

<!-- OPEN MAIN-->
  <main>
    <div class="container">
      	<div class="row">
        	<div class="col-xs-12">
          	<h1 class="page_title">
             	<hr>
            	RÉUNIONS
          	</h1>
        	</div>
		</div> <!-- Close Row -->

        <?php
foreach($meetings as $meeting){
?>
      	<div class="row">
        	<div class="col-xs-12 entete_evenements">
          		<p>
            		<i class="glyphicon glyphicon-calendar"></i>
            			<span class="date"><?php echo ucfirst($meeting['date']) ?></span>
          		</p>
        	</div>
		    </div> <!-- Close Row -->

      	<div class="row">
			<!--<div class="evenements_img">
				<img src="<?= $this->assetUrl('front/img/fond_temporaire.jpg') ?>" alt="photo de réunion deux faubourgs">
			</div> -->
		</div>
      	<div class="row">
        	<div class="col-xs-12">
            <!--<h3>!! Titre From BDD !!</h3>-->
	     	    <p class="paragraphe_text">
	            	<?php echo ucfirst($meeting['content'])?>
	         	</p>
	        </div>
      	</div> <!-- Close Row -->
        <?php
        }//fin foreach     ?>


    </div> <!-- Close Container -->
  </main>
<!-- CLOSE MAIN-->

<?php $this->stop('main_content') ?>
