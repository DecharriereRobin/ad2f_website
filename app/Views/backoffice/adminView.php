<?php $this->layout('layout', ['title' => 'Liste des  admins']) ?>

<?php $this->start('main_content') ?>




<?php foreach($admins as $admin){ ?>

           <?= $admin['id'] ?>
           <?= $admin['lastname'] ?>
           <?= $admin['firstname'] ?>
           <?= $admin['lastname'] ?>
           <?= $admin['email'] ?>
           <a href="<?= $this->url('backoffice_AdminDelete', ['id' => $admin['id']]) ?>">supprimer-(Penser à créer la confirmation)</a>
           <a href="<?= $this->url('backoffice_AdminEdit', ['id' => $admin['id']]) ?>">Editer</a>
           <?= "</br>" ?>
 <?php } ?>

  <a href="<?= $this->url('backoffice_AdminCreate') ?>">Ajouter un nouveau membre du CA</a>

<?php $this->stop('main_content') ?>
