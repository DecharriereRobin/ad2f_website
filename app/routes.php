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

	   //ASSOCIATION
	   ['GET', '/agenda/soon', 'Front\\Agenda#showSoon', 'agenda_Soon'],
	   ['GET', '/agenda/meeting', 'Front\\Agenda#showMeeting', 'agenda_meeting'],

		//BACKOFFICE
         ['GET|POST', '/backoffice/accueil', 'Backoffice\\Admin#home', 'backoffice_Accueil'],

		//Admin
		['GET|POST', '/backoffice/adminView', 'Backoffice\\Admin#showAdmin', 'backoffice_AdminView'],
		['GET|POST', '/backoffice/adminCreate', 'Backoffice\\Admin#create', 'backoffice_AdminCreate'],
		['GET|POST', '/backoffice/adminEdit/[i:id]', 'Backoffice\\Admin#edit', 'backoffice_AdminEdit'],
		['GET|POST', '/backoffice/adminDelete/[i:id]', 'Backoffice\\Admin#delete', 'backoffice_AdminDelete'],
		['GET|POST', '/backoffice/adminForgot', 'Backoffice\\Admin#forgot', 'backoffice_AdminForgot'],
		['GET|POST', '/backoffice/adminLogin' , 'Backoffice\\Admin#login' , 'backoffice_AdminLogin'],
		['GET|POST', '/backoffice/adminLogout', 'Backoffice\\Admin#logout', 'backoffice_AdminLogout'],

		//MEMBERS
		['GET|POST', '/members/create'        , 'Backoffice\\Members#membersCreate', 'backoffice_MembersCreate'],
		['GET'     , '/members/list'          , 'Backoffice\\Members#membersList'  , 'backoffice_MembersList'],
		['GET|POST', '/members/edit/[i:id]'   , 'Backoffice\\Members#membersEdit'  , 'backoffice_MembersEdit'],
		['GET|POST', '/members/delete/[i:id]' , 'Backoffice\\Members#membersDelete', 'backoffice_MembersDelete'],


		// EVENT ROUTE

		['GET|POST', '/backoffice/event/create',        'Backoffice\\Event#eventCreate', 'backoffice_EventCreate'],
		['GET',      '/backoffice/event/list',          'Backoffice\\Event#eventList',   'backoffice_EventList'],
		['GET|POST', '/backoffice/event/edit/[i:id]',   'Backoffice\\Event#eventEdit',   'backoffice_EventEdit'],
		['GET|POST', '/backoffice/event/delete/[i:id]', 'Backoffice\\Event#eventDelete', 'backoffice_EventDelete'],



		// BRADERIE
		['GET'     , '/backoffice/garageList'  , 'Backoffice\\Garage#liste' , 'backoffice_GarageList'],
		['GET|POST', '/backoffice/garageDelete', 'Backoffice\\Garage#delete', 'backoffice_GarageDelete'],
		['GET|POST', '/backoffice/garageEdit'  , 'Backoffice\\Garage#edit'  , 'backoffice_GarageEdit'],

		//REUNIONS-MEETING
		['GET|POST', '/backoffice/meetingsCreate', 'Backoffice\\Meetings#create', 'backoffice_MeetingsCreate'],
		['GET'     , '/backoffice/meetingsList'  , 'Backoffice\\Meetings#liste' , 'backoffice_MeetingsList'],
		['GET|POST', '/backoffice/meetingsEdit'  , 'Backoffice\\Meetings#edit'  , 'backoffice_MeetingsEdit'],
		['GET|POST', '/backoffice/meetingsDelete', 'Backoffice\\Meetings#delete', 'backoffice_MeetingsDelete'],




	);
