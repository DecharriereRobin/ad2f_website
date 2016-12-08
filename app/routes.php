<?php

	$w_routes = array(
		//FRONT
		['GET', '/association', 'FRONT\\Association#home', 'association_home'],
		['GET|POST', '/associationContact', 'FRONT\\Association#contact', 'association_contact'],
		['GET|POST', '/associationAdhesion', 'FRONT\\Association#adhesion', 'association_adhesion'],

		//BACKOFFICE


		//Admin
		['GET|POST', '/adminCreate', 'Backoffice\\Admin#create', 'backoffice_AdminCreate'],
		['GET|POST', '/adminForgot', 'Backoffice\\Admin#forgot', 'backoffice_AdminForgot'],
		['GET|POST', '/adminLogin', 'Backoffice\\Admin#login', 'backoffice_AdminLogin'],
		['GET|POST', '/adminLogout', 'Backoffice\\Admin#logout', 'backoffice_AdminLogout'],

		//Adherent
		['GET', '/membersList', 'Backoffice\\Members#liste', 'backoffice_Memberslist'],
		['GET|POST', '/membersEdit', 'Backoffice\\Members#edit', 'backoffice_MembersEdit'],


		// EVent
		['GET|POST', '/eventCreate', 'Backoffice\\Event#create', 'backoffice_EventCreate'],
		['GET', '/eventList', 'Backoffice\\Event#liste', 'backoffice_EventList'],
		['GET|POST', '/eventEdit', 'Backoffice\\Event#edit', 'backoffice_EventEdit'],
		['GET|POST', '/eventDelete', 'Backoffice\\Event#delete', 'backoffice_EventDelete'],

		// BRADERIE
		['GET', '/garageList', 'Backoffice\\Garage#liste', 'backoffice_GarageList'],
		['GET|POST', '/garageDelete', 'Backoffice\\Garage#delete', 'backoffice_GarageDelete'],
		['GET|POST', '/garageEdit', 'Backoffice\\Garage#edit', 'backoffice_GarageEdit'],

		//REUNIONS-MEETING
		['GET|POST', '/meetingsCreate', 'Backoffice\\Meetings#create', 'backoffice_MeetingsCreate'],
		['GET', '/meetingsList', 'Backoffice\\Meetings#liste', 'backoffice_MeetingsList'],
		['GET|POST', '/meetingsEdit', 'Backoffice\\Meetings#edit', 'backoffice_MeetingsEdit'],
		['GET|POST', '/meetingsDelete', 'Backoffice\\Meetings#delete', 'backoffice_MeetingsDelete'],




	);
