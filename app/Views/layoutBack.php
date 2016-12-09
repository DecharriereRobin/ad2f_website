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
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Catégories </strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Settings <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                       
                        <li > <a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>

                        <li <?= ($w_current_route == 'backoffice_Memberslist') ? 'class="active"' : ''; ?>><a href="<?php $this->url('backoffice_Memberslist')?>"><i class="glyphicon glyphicon-envelope"></i> Adhérents <span class="badge badge-info">4</span></a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_EventList') ? 'class="active"' : ''; ?>><a href="<?php $this->url('backoffice_EventList')?>"><i class="glyphicon glyphicon-cog"></i> Événements</a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_AdminCreate') ? 'class="active"' : ''; ?>><a href="<?php $this->url('backoffice_AdminCreate')?>"><i class="glyphicon glyphicon-user"></i> Membres CA admin</a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_GarageList') ? 'class="active"' : ''; ?>><a href="<?php $this->url('backoffice_GarageList')?>"><i class="glyphicon glyphicon-flag"></i> Braderie</a></li>
                        
                        <li <?= ($w_current_route == 'backoffice_MeetingsList') ? 'class="active"' : ''; ?>><a href="<?php $this->url('backoffice_MeetingsList')?>"><i class="glyphicon glyphicon-exclamation-sign"></i> Agenda</a></li>
                        
                        <li><a href=""><i class="glyphicon glyphicon-exclamation-sign"></i> Map Interactive (soon)</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-exclamation-sign"></i> Bon Coin (soon)</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-off"></i> Déconnecter</a></li>

                    </ul>
                </li>
            </ul>

            <hr>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i><?= $this->e($title) ?></strong></a>

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

<footer class="text-center"></footer>

	<!-- script references -->
		<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
        <script src="<?= $this->assetUrl('js/backoffice/script.js') ?>"></script>
        <?= $this->section('js') ?>

	</body>
</html>