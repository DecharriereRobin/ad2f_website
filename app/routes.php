<?php
	$w_routes = array(
		//FRONT
		// ASSOCIATION
		['GET', '/association', 'Front\\Association#home', 'association_home'],
		['GET|POST', '/association/contact', 'Front\\Association#contact', 'association_contact'],
		['GET|POST', '/association/adhesion', 'Front\\Association#adhesion', 'association_adhesion'],
		// EVENT VIEWER
        ['GET', '/event/carnaval', 'Front\\EventViewer#showCarnaval', 'eventViewer_carnaval'],
        ['GET', '/event/feteDesVoisins', 'Front\\EventViewer#showBlockParty', 'eventViewer_fetes'],
        ['GET', '/event/samediMalin', 'Front\\EventViewer#showSaturdayMorning', 'eventViewer_samedi'],
        ['GET', '/event/braderie', 'Front\\EventViewer#showGarage', 'eventViewer_braderie'],
        ['GET|POST', '/event/braderie/inscription', 'Front\\EventViewer#subscribeGarage', 'eventViewer_braderieIncription'],
        //ASSOCIATION agenda
        ['GET', '/agenda/soon', 'Front\\Agenda#showSoon', 'agenda_Soon'],
        ['GET', '/agenda/meeting', 'Front\\Agenda#showMeeting', 'agenda_meeting'],
        //maps
        ['GET', '/front/map', 'Front\\Map#showMap', 'map_Show'],
		//BACKOFFICE
        ['GET|POST', '/backoffice/accueil', 'Backoffice\\Admin#home', 'backoffice_Accueil'],
		//Admin
		['GET|POST', '/backoffice/admin/view', 'Backoffice\\Admin#showAdmin', 'backoffice_AdminView'],
		['GET|POST', '/backoffice/admin/create', 'Backoffice\\Admin#create', 'backoffice_AdminCreate'],
		['GET|POST', '/backoffice/admin/edit/[i:id]', 'Backoffice\\Admin#edit', 'backoffice_AdminEdit'],
		['GET|POST', '/backoffice/admin/delete/[i:id]', 'Backoffice\\Admin#delete', 'backoffice_AdminDelete'],
		['GET|POST', '/backoffice/admin/forgot', 'Backoffice\\Admin#forgot', 'backoffice_AdminForgot'],
		['GET|POST', '/backoffice/admin/newPassword/[*:token]', 'Backoffice\\Admin#newpassword', 'backoffice_newpassword'],
		['GET|POST', '/backoffice/admin/login' , 'Backoffice\\Admin#login' , 'backoffice_AdminLogin'],
		['GET|POST', '/backoffice/admin/logout', 'Backoffice\\Admin#logout', 'backoffice_AdminLogout'],
		//MEMBERS
		['GET|POST', '/backoffice/member/create'        , 'Backoffice\\Member#memberCreate', 'backoffice_MemberCreate'],
		['GET'     , '/backoffice/member/list'          , 'Backoffice\\Member#memberList'  , 'backoffice_MemberList'],
		['GET|POST', '/backoffice/member/edit/[i:id]'   , 'Backoffice\\Member#memberEdit'  , 'backoffice_MemberEdit'],
		['GET|POST', '/backoffice/member/delete/[i:id]' , 'Backoffice\\Member#memberDelete', 'backoffice_MemberDelete'],
		// EVENT ROUTE
		['GET|POST', '/backoffice/event/create',         'Backoffice\\Event#eventCreate', 'backoffice_EventCreate'],
		['GET',      '/backoffice/event/list/[i:page]?', 'Backoffice\\Event#eventList',   'backoffice_EventList'],
		['GET|POST', '/backoffice/event/edit/[i:id]',    'Backoffice\\Event#eventEdit',   'backoffice_EventEdit'],
		['GET|POST', '/backoffice/event/delete/[i:id]/[i:page]?',  'Backoffice\\Event#eventDelete', 'backoffice_EventDelete'],
		// BRADERIE
		['GET'     , '/backoffice/garage/list', 'Backoffice\\Garage#read' , 'backoffice_GarageList'],
		['GET|POST', '/backoffice/garage/delete/[i:id]', 'Backoffice\\Garage#delete', 'backoffice_GarageDelete'],
		['GET|POST', '/backoffice/garage/edit/[i:id]', 'Backoffice\\Garage#edit', 'backoffice_GarageEdit'],
		['GET|POST', '/backoffice/garage/create', 'Backoffice\\Garage#create', 'backoffice_GarageCreate'],
		['GET|POST', '/backoffice/garage/print', 'Backoffice\\Garage#printgaragelist', 'backoffice_GaragePrint'],
		//REUNIONS-MEETING
		['GET|POST', '/backoffice/meeting/create', 'Backoffice\\Meeting#create', 'backoffice_MeetingCreate'],
		['GET'     , '/backoffice/meeting/list' , 'Backoffice\\Meeting#read', 'backoffice_MeetingList'],
		['GET|POST', '/backoffice/meeting/edit/[i:id]'  , 'Backoffice\\Meeting#edit', 'backoffice_MeetingEdit'],
		['GET|POST', '/backoffice/meeting/delete/[i:id]', 'Backoffice\\Meeting#delete', 'backoffice_MeetingDelete'],
		//Profil de l'association
		['GET'     , '/backoffice/association/view'  , 'Backoffice\\Association#showAssociation' , 'backoffice_AssociationProfil'],
	    ['GET|POST', '/backoffice/associationEdit/[i:id]',   'Backoffice\\Association#edit', 'backoffice_AssociationEdit'],
		// lieu
		['GET|POST', '/backoffice/place/create', 'Backoffice\\Place#create', 'backoffice_placeCreate'],
		['GET', '/backoffice/place/view', 'Backoffice\\Place#placeView', 'backoffice_placeView'],
		['GET|POST', '/backoffice/place/edit[i:id]',    'Backoffice\\Place#placeEdit',   'backoffice_PlaceEdit'],
		['GET|POST', '/backoffice/place/delete/[i:id]',  'Backoffice\\Place#placeDelete', 'backoffice_PlaceDelete'],
	);