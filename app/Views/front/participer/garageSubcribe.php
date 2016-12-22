<?php $this->layout('layout', ['title' => 'inscription braderie']) ?>

<?php $this->start('main_content') ?>

<main>
	<div class="container">
		<div class="row">
	      <div class="col-xs-12">
	         <h1 class="page_title_main">
	         	<hr>
	            BRADERIE
	         </h1>
	       </div>
	    </div>

		<div class="row">
	   		<div class="col-xs-12
	   					col-sm-6
	    				inscription_braderie_form">
		    	<form class="well form-horizontal" action=" " method="post"  id="contact_form">
					<fieldset>
						<legend>S'INSCRIRE À LA BRADERIE</legend>

						<div class="form-group"> 
						  <div class="col-xs-12 inputGroupContainer">
						  	<div class="input-group">
						  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  		<input  name="firstname" placeholder="Nom" class="form-control"  type="text">
						    </div>
						  </div>
						</div>

						<div class="form-group">
						    <div class="col-xs-12 inputGroupContainer">
						   	 <div class="input-group">
						  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  		<input name="lastname" placeholder="Prénom" class="form-control"  type="text">
						    </div>
						  </div>
						</div>

						<div class="form-group">
						    <div class="col-xs-12 inputGroupContainer">
						    	<div class="input-group">
						        	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						  			<input name="email" placeholder="Email" class="form-control"  type="text">
						    	</div>
						  	</div>
						</div>

						 <div class="form-group">
						    <div class="col-xs-12 inputGroupContainer">
						    	<div class="input-group">
						        	<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
						  			<input name="adresse" placeholder="address" class="form-control"  type="text">
						    	</div>
						 	</div>
						</div>

						<div class="form-group">
						    <div class="col-xs-12 inputGroupContainer">
						    	<div class="input-group">
						        	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
						  			<input name="phone" placeholder="Téléphone" class="form-control"  type="text">
						    	</div>
						  	</div>
						</div>

						 <div class="form-group">
						    <div class="col-xs-12 inputGroupContainer">
						    	<div class="input-group">
						        	<span class="input-group-addon"><i class="glyphicon glyphicon-resize-horizontal"></i></span>
						 			<input name="reservedmeters" placeholder="Mètres d'étal ( 5€ / mètre )" class="form-control"  type="text">
						    	</div>
						  	</div>
						</div>
						
						<div class="col-md-push-3 col-md-8">
							<label for="paid">
						  		<input type="radio" name="paid" value="1" id="paid"> Déjà membre 
							</label><br />
							<label for="not_paid">
						  		<input type="radio" name="paid" value="0" id="not_paid" checked>Pas encore membre <br />
							</label>
						</div>

						<!-- Success message --> 
						<div class="col-md-push-3 col-md-6 alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Merci pour votre message. Nous vous répondrons dans les plus brefs délais.
						</div>

						<!-- Button --> 
						<div class="form-group">
						    	<button type="submit" class="btn btn-default btn_form_submit" >Envoyer <span class="glyphicon glyphicon-send"></span>
						    	</button>
						  	</div>
						</div>

					</fieldset>
				</form>
			</div>

			<div class="col-xs-12
						col-sm-6
						div_reglement">
				<h2 class="paragraphe_text reglement">RÉGLEMENT DE LA BRADERIE</h2>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>		
	       
	   	</div> <!-- Close Row -->
	</div> <!-- Close Container -->

<?php $this->stop('main_content') ?>