<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Association des 2 faubourgs - Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#">
                    <?= $w_site_name ?> - Administration</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"> <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                        <ul id="g-account-menu" class="dropdown-menu" role="menu">
                            <li><a href="#">My Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="admin/logout"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /Header -->
    <!-- Main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2">
                <!-- Left column --><a href="<?= $this->url('backoffice_Accueil')?>"><i class="glyphicon glyphicon-home"></i> Home</a>
                <hr>
                <ul class="nav nav-stacked">
                    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#association" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-credit-card"></i> Association <i class="pull-right chevron glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" expanded="false" id="association">
                            <li <?=( $w_current_route=='backoffice_AssociationProfil' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_AssociationProfil')?>"> Information sur l'association <span class="badge badge-info"></span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-stacked">
                    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#members" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-credit-card"></i> Adhérents <i class="pull-right chevron glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" expanded="false" id="members">
                            <li <?=( $w_current_route=='backoffice_MemberList' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MemberList')?>"> Liste des Adhérents <span class="badge badge-info"></span></a></li>
                            <li <?=( $w_current_route=='backoffice_MemberCreate' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MemberCreate')?>"> Ajouter Adhérent <span class="badge badge-info"></span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-stacked">
                    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#brocanteur" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-calendar"></i> Braderies <i class="pull-right chevron glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" expanded="false" id="brocanteur">
                            <li <?=( $w_current_route=='backoffice_GarageList' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_GarageList')?>"> Liste des participants</a></li>
                            <li <?=( $w_current_route=='backoffice_GarageCreate' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_GarageCreate')?>"> Ajouter un participants</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-stacked">
                    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#events" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-bullhorn"></i> Évenements <i class="pull-right chevron glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" expanded="false" id="events">
                            <li <?=( $w_current_route=='backoffice_EventList' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_EventList')?>"> Liste des événements</a></li>
                            <li <?=( $w_current_route=='backoffice_EventCreate' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_EventCreate')?>"> Ajouter un évenement </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-stacked">
                    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#agenda" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-calendar"></i> Réunions de l'association <i class="pull-right chevron glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" expanded="false" id="agenda">
                            <li <?=( $w_current_route=='backoffice_MeetingList' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MeetingList')?>"> Réunion du CA</a></li>
                            <li <?=( $w_current_route=='backoffice_MeetingCreate' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_MeetingCreate')?>"> Ajouter une réunion</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-stacked">
                    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#interactiveMap" aria-expanded="false" class="collapsed"><i class="glyphicon glyphicon-map-marker"></i> Carte Interactive<i class="pull-right chevron glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" expanded="false" id="interactiveMap">
                            <li <?=( $w_current_route=='backoffice_placeView' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_placeView')?>">Liste des lieux</a></li>
                            <li <?=( $w_current_route=='backoffice_placeCreate' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_placeCreate')?>">Ajouter un lieux</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu2"><i class="glyphicon glyphicon-user"></i> Administration <i class="pull-right glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu2">
                            <li <?=( $w_current_route=='backoffice_AdminView' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_AdminView')?>">Liste des admin</a></li>
                            <li <?=( $w_current_route=='backoffice_AdminCreate' ) ? 'class="active"' : ''; ?>><a href="<?= $this->url('backoffice_AdminCreate')?>">Creer un admin</a></li>
                            <li><a href="http://localhost/wf3/ad2f/public/backoffice/admin/logout"><i class="glyphicon glyphicon-off"></i> Déconnecter</a></li>
                        </ul>
                    </li>
                </ul>
                <hr> </div>
            <div class="title"><i class="glyphicon glyphicon-edit"></i>
                <?= $this->e($title) ?>
            </div>
            <br>
            <br>
            <div>
                <?= $this->section('main_content'); ?>
            </div>
            <!--/col-span-9-->
        </div>
    </div>
    <!-- /Main -->
    <footer class="text-center"></footer>
    <!-- script references -->
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/script.js') ?>"></script>
    <?= $this->section('js') ?>
</body>

</html>