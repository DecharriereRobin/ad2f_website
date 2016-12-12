<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Association des 2 faubourgs - Administration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?= $this->section('css') ?>

	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#"><?= $w_site_name ?> - Administration</a>

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href=""><i class="glyphicon glyphicon-home"></i> Home</a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#members" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-credit-card"></i> Adhérents <i class=" chevron glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" expanded="false" id="members">

                        <li <?= ($w_current_route == 'backoffice_Memberslist') ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MembersList')?>">Liste des Adhérents <span class="badge badge-info">4</span></a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_Memberscreate') ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MembersCreate')?>">Ajouter Adhérent <span class="badge badge-info">4</span></a></li>
                        
                    </ul>
                </li>
            </ul>
            
            <ul class="nav nav-stacked">
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#events" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-bullhorn"></i> Évenements <i class=" chevron glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" expanded="false" id="events">

                        <li <?= ($w_current_route == 'backoffice_EventList') ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_EventList')?>">Liste des événements</a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_Eventcreate') ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_EventCreate')?>">Ajouter un évenement </a></li>
                        
                    </ul>
                </li>
            </ul>
            
            <ul class="nav nav-stacked">
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#agenda" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-calendar"></i> Réunions de l'association <i class=" chevron glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" expanded="false" id="agenda">

                        <li <?= ($w_current_route == 'backoffice_MeetingsList') ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MeetingsList')?>">Réunion du CA</a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_MeetingsList') ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MeetingsList')?>">Ajouter une réunion</a></li>
                        
                    </ul>
                </li>
            </ul>
            
            <ul class="nav nav-stacked">
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#interactiveMap" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-map-marker"></i> Carte Interactive<i class=" chevron glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" expanded="false" id="interactiveMap">
                        
                    </ul>
                </li>
            </ul>
            
            <ul class="nav nav-stacked">
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#bonCoin" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-gift"></i> Le Bon Coin<i class=" chevron glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" expanded="false" id="bonCoin">
                        
                    </ul>
                </li>
            </ul>
            
            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu2"><i class="glyphicon glyphicon-user"></i> Administration <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu2">

                        <li><a href=""><i class="glyphicon glyphicon-off"></i> Déconnecter</a></li>

                    </ul>
                </li>
            </ul>

            <hr>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <a href="#"><strong><i class="glyphicon glyphicon-edit"></i> <?= $this->e($title) ?></strong></a>

            <div class="row">
                <!-- center left-->
                <div class="col-md-9">
                    <?= $this->section('main_content'); ?>

                </div>
                <!--/col-span-6-->
            </div>
            <!--/row-->
            <hr>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

<footer class="text-center"><?= date('Y-m-d') ?></footer>

	<!-- script references -->
		<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/backoffice/script.js') ?>"></script>
        <?= $this->section('js') ?>

	</body>
</html>